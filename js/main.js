document.addEventListener('DOMContentLoaded', () => {
    const COUNTER_ID = 110922093;
    const registrationSection = document.getElementById('registration');
    const form = document.getElementById('registration-form');
    const message = document.getElementById('form-message');
    const selectedTariff = document.getElementById('selected-tariff');
    const purposeField = document.getElementById('purpose-field');
    const tariffInput = document.getElementById('tariff-field');
    const registerButtons = document.querySelectorAll('.btn-register');
    const defaultPurpose = 'Запись на курс первой помощи';

    const trackGoal = (goalName, params) => {
        if (typeof ym !== 'function') {
            return;
        }
        try {
            ym(COUNTER_ID, 'reachGoal', goalName, params || {});
        } catch (error) {
            // ignore
        }
    };

    const scrollToRegistration = () => {
        if (!registrationSection) {
            return;
        }
        registrationSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
    };

    const setTariff = (tariffName) => {
        if (tariffInput instanceof HTMLInputElement) {
            tariffInput.value = tariffName || '';
        }

        if (purposeField instanceof HTMLInputElement || purposeField instanceof HTMLTextAreaElement) {
            purposeField.value = tariffName
                ? `Тариф: ${tariffName}. ${defaultPurpose}`
                : defaultPurpose;
        }

        if (selectedTariff instanceof HTMLElement) {
            if (tariffName) {
                selectedTariff.textContent = `Выбран тариф «${tariffName}». Заполните форму ниже.`;
                selectedTariff.classList.add('has-selection');
            } else {
                selectedTariff.textContent = 'Выберите тариф выше — здесь появится выбранный формат.';
                selectedTariff.classList.remove('has-selection');
            }
        }

        registerButtons.forEach((button) => {
            const isActive = (button.getAttribute('data-tariff') || '') === tariffName;
            button.setAttribute('aria-pressed', isActive ? 'true' : 'false');
            button.closest('.pricing-card')?.classList.toggle('is-selected', isActive);
        });
    };

    registerButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const tariff = button.getAttribute('data-tariff') || '';
            const track = button.getAttribute('data-track') || 'register_click';
            setTariff(tariff);
            trackGoal(track, { tariff });
            trackGoal('click_register', { source: track, tariff });
            scrollToRegistration();
            const nameInput = form?.querySelector('input[name="name"]');
            if (nameInput instanceof HTMLInputElement) {
                window.setTimeout(() => nameInput.focus(), 400);
            }
        });
    });

    document.querySelectorAll('[data-track]').forEach((element) => {
        if (element.classList.contains('btn-register')) {
            return;
        }
        element.addEventListener('click', () => {
            const track = element.getAttribute('data-track');
            if (track) {
                trackGoal(track);
            }
        });
    });

    if (!form) {
        return;
    }

    const firstField = form.querySelector('input[name="name"]');
    if (firstField instanceof HTMLInputElement) {
        let focusTracked = false;
        firstField.addEventListener('focus', () => {
            if (focusTracked) {
                return;
            }
            focusTracked = true;
            trackGoal('form_focus');
        });
    }

    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const submitButton = form.querySelector('button[type="submit"]');
        const formData = new FormData(form);

        if (submitButton instanceof HTMLButtonElement) {
            submitButton.disabled = true;
        }

        if (message) {
            message.textContent = '';
            message.className = 'form-message';
        }

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData,
            });

            const data = await response.json();

            if (!response.ok || !data.ok) {
                throw new Error(data.error || 'Не удалось отправить заявку.');
            }

            trackGoal('lead_submit');

            if (message) {
                message.textContent = 'Заявка отправлена. Мы свяжемся с вами в ближайшее время.';
                message.className = 'form-message success';
            }

            form.reset();
            if (purposeField instanceof HTMLInputElement || purposeField instanceof HTMLTextAreaElement) {
                purposeField.value = defaultPurpose;
            }
            setTariff('');
        } catch (error) {
            if (message) {
                message.textContent = error instanceof Error ? error.message : 'Не удалось отправить заявку.';
                message.className = 'form-message error';
            }
        } finally {
            if (submitButton instanceof HTMLButtonElement) {
                submitButton.disabled = false;
            }
        }
    });
});
