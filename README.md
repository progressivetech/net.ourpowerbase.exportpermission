# Export Permission

This CiviCRM extension adds a new permission that allows the Export option to
appear in the drop down Actions menu after a search.

Please note: this extension does not technically prevent a user from exporting
a CiviCRM database, it *only* removes that option from the Actions drop down
list.  Enterprising hackers can figure out ways to convince CiviCRM to provide
the export. Additionally, any user that can view all Contacts can export the
data one way or another - even if it means copy and pasting from each screen.

Finally, if you don't want a user to have the export option, do not provide
them with access to CiviReports either.
