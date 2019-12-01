# Joomla component
Code for creating a Joomla Component. The components are the main functional units of Joomla; can be seen as mini-applications. The structure is based on the Model-View-Controller model

Template of a Joomla component for creating a "configurator". Exstension of a component created by the site:
https://www.component-creator.com/it/

In the "views" part we find the web page with a checkbox, and an icon that activates a modal. The icon is taken from the fontAwesome set:
https://fontawesome.com/
In functions.php we find useful functions for querying the site database.

In the "models" part we find a table of a database, which the component can use through the alias #__tablename_

In the "js" folder we find a file that combines the functions used to display the modal and to send an email.
The "sendMail" function is associated with the button within the modal.

# How to use it
To use this template, just create a zip of the repository content and upload it in the "Extensions" section of the Joomla control panel
