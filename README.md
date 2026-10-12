# Muneeb Ahmad — Chef Portfolio (PHP)

A responsive, one-page chef portfolio created from the supplied CV. It uses PHP includes for the shared header/footer, plain CSS, and vanilla JavaScript. No database is required.

## Requirements
- PHP 7.4+ (PHP 8+ recommended)
- XAMPP, WAMP, MAMP, or any local PHP server
- Internet connection for Google Fonts (optional; fallback fonts are included)

## Run with XAMPP
1. Extract `muneeb_ahmad_chef_portfolio.zip`.
2. Copy the `muneeb_ahmad_chef_portfolio` folder to your XAMPP `htdocs` directory.
3. Start Apache from the XAMPP Control Panel.
4. Open `http://localhost/muneeb_ahmad_chef_portfolio/` in your browser.

## Personalize the portfolio
- The About section already uses the supplied chef portrait at `assets/images/chef-hero.png`.
- The supplied chef photograph is included as `assets/images/chef-hero.png` and used in the hero background and About section.
- Confirm employment dates before adding them. The supplied CV did not specify dates.
- Add the education institution and exact qualification only after confirming them.
- Certificate labels are reproduced as listed in the CV; add scans or issuing details only when available.
- The culinary showcase currently reuses the supplied chef photo as a visual placeholder. Replace these panels with real dish photos when available.
- Update contact information in `index.php` if it changes.

## Notes
- This version does not use a database or PHP mail handler. Email and phone links open the visitor's email/phone application.
- No employment dates, education details, or culinary achievements have been invented.
- For production deployment, enable HTTPS and keep PHP updated.
