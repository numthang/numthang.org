BlogHub - Changelog
===================

Version 1.3.2 - Stable
----------------------
- Fix: Right method used on wrong object in Comment model class.

Version 1.3.1 - Stable
----------------------
- Fix: Add CallsAnyMethod interface to BlogHubPost and BlogHubBackendUser.

Version 1.3.0 - Stable
----------------------
- Add: Blog Comments table, model and functions.
- Add: Blog Comments columns on rainlab_blog_posts.
- Add: New comment and tag related backend permissions.
- Add: A new settings menu to configure the BlogHub configuration.
- Add: New dashboard widget 'Comments List'.
- Add: New dashboard widget 'Posts List'.
- Add: New dashboard widget 'Posts Statistics'.
- Add: Comments count sorting option to Post Model.
- Add: Move Backend user Extension to the `BlogHubBackendUserModel` behaviour.
- Add: Custom `BlogHubPost` model, which is implemented in RainLabs Post model.
- Add: Custom `BlogHubBackendUser` model, which is implemented in Octobers User model.
- Add: New `[bloghubBase]` component to configure the base options on the layout level.
- Add: New `[bloghubCommentList]` component to show comment list outside of post page.
- Add: New `[bloghubCommentSection]` component to show comment list with form on post page.
- Add: New `[bloghubPostsByAuthor]` component for author archive pages.
- Add: New `[bloghubPostsByCommentCount]` component to list posts by their comments count.
- Add: New `[bloghubPostsByDate]` component for date archive pages.
- Add: New `[bloghubPostsByTag]` component for tag archive pages.
- Add: New vendor `Gregwar/Captcha` for the new comment system. 
- Update: Add missing translation strings (for both english and german).
- Update: Set RatMD.BlogHub as owner on side menu items.
- Update: The new date archive component supports now week archives as well.
- Update: Support multiple-tags query combinations using + (all) and , (either).
- Update: The visitors table to collect likes and dislikes for the new comment system.
- Update: Rename `ratmd_bloghub_settings` settings model to `ratmd_bloghub_meta_settings`.
- Update: The new `BlogHubPostModel` behaviour has been finished.
- Update: Estimated reading time is now part of the new `BlogHubPostModel` behaviour
- Update: Published * ago date/time view is now part of the new `BlogHubPostModel` behaviour.
- Update: Backend Users are now Visitors as well (but do NOT increase the views / unique_views counter).
- Update: New default Bootstrap 5 partials for all components.
- Deprecated: `[bloghubAuthorArchive]` has been marked as deprecated, please use `[bloghubPostsByAuthor]` instead.
- Deprecated: `[bloghubDateArchive]` has been marked as deprecated, please use `[bloghubPostsByDate]` instead.
- Deprecated: `[bloghubTagArchive]` has been marked as deprecated, please use `[bloghubPostsByTag]` instead.
- Fix: Replace missing default component partials with working ones.
- Fix: Down Migration did not work on OctoberCMS v2 (dropColumns method does not exist).
- Fix: PHP typings.
- Fix: Smaller bugfixes & code cleanup tasks.

Version 1.2.5 - Stable
----------------------
- Fix: MySQL installation issue.

Version 1.2.4 - Stable
----------------------
- Fix: Database Table Migration for OctoberCMS v3.

Version 1.2.3 - Stable
----------------------
- Add: `BlogHubPostModel` behaviour (Work in Progress).
- Add: Estimated reading time (Work in Progress).
- Add: Published * ago date/time view (Work in Progress).
- Fix: Table / Coulmn names for OctoberCMS Marketplace.

Version 1.2.2 - Stable
----------------------
- Add: 'View / Unique' column definition to Posts controller.
- Add: 'Filter Tags' scope column definition to Post and Posts controller.
- Add: Missing locale strings.
- Update: Locale strings and language files.
- Remove: Meta controller and definitions.

Version 1.2.1 - Stable
----------------------
- Add: 'About Me' field for backend users.

Version 1.2.0 - Stable
----------------------
- Add: Extend `backend_users` table with `display_name` and `author_slug` fields.
- Add: Missing URL on the Preview button.
- Add: Date archive type: 'year', 'month' or 'day'.
- Add: Formatted date archive string.
- Add: Dynamic BackendUser method `bloghub_display()` to receive user name.
- Add: Dynamic BackendUser method `bloghub_slug()` to receive author slug or login name.
- Update: Return 404 when no author is found ([bloghubAuthorArchive] Component).
- Update: Return 404 when no date is found or date is invalid ([bloghubDateArchive] Component).
- Update: Return 404 when no tag is found ([bloghubTagArchive] Component).
- Update: Use `author_slug` instead of login (when `author_slug` is not empty).

Version 1.1.0 - Stable
----------------------
- Add: View / Unique View table and counter system. 
- Add: Tags list component (similar to the Categories list component).
- Add: `posts_count` belongsToMany value and getter.
- Add: `Visitor` model.
- Add: `views` and `unique_views` sorting options to the Post model.
- Update: Move Post list by tag slug component from `Tags` to `Tag`.

Version 1.0.0 - Stable
----------------------
- Initial Release