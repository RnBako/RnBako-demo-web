# Design: CR boost A+B (simulator-first, full landing)

**Date:** 2026-07-24  
**Site:** https://rnbako.naition.sortedmap.ru/  
**Goal:** Maximize visit-simulator conversion without dramatically stripping sections.

## Context

- Baseline mid-run ~11% (44 visits) after form aligned to 3 visible fields + hidden `purpose`.
- Peer skosovsky ~27% with shorter path to form; we keep STUDENTS fields and a full page.

## Approach (approved)

**A — Conversion higher on the page:** reorder so pricing + form sit right after About.  
**B — Bot-path hygiene:** default tariff «Базовый», denser spacing, no sticky CTA / details.

## Page order

1. Hero → `#pricing`  
2. About  
3. Pricing  
4. Registration (form)  
5. Program  
6. Injuries  
7. Legal  
8. CPR photo  
9. Instructors  
10. Footer  

## Form / STUDENTS

- Visible required: `name`, `phone`, `email`  
- Hidden: `purpose` (always present), optional `tariff`  
- Keep `api/visit.php` in `<head>`; do not change `sql/schema.sql`

## Bot hygiene

- On load: tariff «Базовый» selected (`is-selected`, purpose/tariff filled)  
- Tariff click: scroll to form + focus name  
- Slightly reduce `.section` padding and CPR image max-height  

## Success

Redeploy + 100 simulator visits; CR clearly above ~11%, stretch toward 20%+.

## Out of scope

Deleting sections; second form; removing `purpose`; copying skosovsky by deleting STUDENTS fields.
