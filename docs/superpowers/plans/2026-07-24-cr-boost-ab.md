# CR Boost A+B Implementation Plan

> **For agentic workers:** implement task-by-task; checkboxes for tracking.

**Goal:** Raise simulator CR by moving pricing+form up and adding default tariff / denser layout.

**Architecture:** Single-page PHP landing; reorder DOM sections; small JS/CSS tweaks. No API schema changes.

**Tech Stack:** PHP, vanilla JS, CSS

## Global Constraints

- Keep form fields `name`, `phone`, `email`, `purpose` in markup
- Keep `<script src="api/visit.php">` in `<head>`
- Do not modify `sql/schema.sql`
- Do not delete major sections; only reorder and densify

---

### Task 1: Reorder sections in `index.php`

- [ ] After `#about`, place `#pricing` then `#registration`
- [ ] Then program, injuries, legal, photo, instructors
- [ ] Prefill HTML defaults for Базовый on tariff/purpose/selected text + `is-selected` on first card

### Task 2: Default tariff in `js/main.js`

- [ ] On DOMContentLoaded call `setTariff('Базовый')` (no scroll)

### Task 3: Denser CSS in `css/style.css`

- [ ] Reduce `.section` padding
- [ ] Cap `.emotional-photo img` max-height

### Task 4: Verify

- [ ] Grep: visit.php in head; all four field names present; no accidental removal of sections
