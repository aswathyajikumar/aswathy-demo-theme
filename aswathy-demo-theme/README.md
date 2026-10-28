# Aswathy Demo Theme

A minimal WordPress theme for practising Git.

## Files
- `style.css` — required theme information and styling
- `index.php` — main page/post loop
- `header.php` / `footer.php` — page wrapper
- `functions.php` — theme setup and CSS loading

## Install
Copy the `aswathy-demo-theme` folder into `wp-content/themes/`, then activate **Aswathy Demo Theme** from WordPress Admin → Appearance → Themes.

## Git practice
Try this workflow:
1. Create a branch: `git switch -c feature/change-heading`
2. Edit a theme file and save it.
3. Stage and commit: `git add .` then `git commit -m "Change demo theme heading"`
4. Push the branch: `git push -u origin feature/change-heading`
5. Open GitHub and create a Pull Request to merge the branch into `main`.

Do not commit passwords, database dumps, `wp-config.php`, or uploaded media unless you have a deliberate reason.
