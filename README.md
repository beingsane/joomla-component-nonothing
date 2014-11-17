Joomla component Nonothing
==========================

A very lean component used to create menu items without component output for static pages.

The Joomla! CMS has no built in functionality for static pages like many other have. You need a component to add menu items. Here a scenario for a very static page with some assumptions. You can e.g. do the following:

1. Install com_nonothing.
2. Create a menu item as the landing page with this component.
3. Remove any modules that might be active on this page. e.g. active on all
4. Call up the page and remove any remaining not wanted elements from the template - with CSS.
4b. You can use an alternative template for this menu item! You still need a component to create the menu item.
5. Create a custom module to be in complete control of e.g. CSS. Alternative is using the Html-module.
6. Write the Html code with a tool depending on skill level and add it to the module.
7. Publish this module in one of the module positions in the content(component) position. If you don't have a position there, you would have to tweak the widths with CSS.

Voila - a very static page. - of course  you can use as many modules as you like, keep the menus, header, footer aso. This was an example for the "very" static page.
