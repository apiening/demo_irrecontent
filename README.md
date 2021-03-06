# demo_irrecontent
Very simple TYPO3 extbase mockup extension to debug IRRE relations to tt_content

# Description
The idea is to have a relation to tt_content so that all sorts of content elements can be added to the model. It should be possible to have accesss to the UID list of the assigned CEs to be able to render the CEs in the frontend.

This extension was built with the `TYPO3 Extension Builder` in TYPO3 version 9.5.5.
It holds two models:
- Ttcontent which maps to the existing table tt_content
- MyModel which has just one String property `name`. But it has a relation to tt_content of type 1:n with `Inline (IRRE)` Render Type.

There is one plugin `list` which has a template file also generated by the `Extension Builder` with the small change that a debug statement ```<f:debug>{_all}</f:debug>``` has been added to the top of the content-section so that it is possible to see the data that hast been fetched in the frontend.

# Issue
It is possible to create a `My Model` entry with the `List` mode in the TYPO3 Backend and fill the `Name`-field but more important it is possible to create content elements and assign them inline. The data is saved correctly to the DB and the assigned CEs are also loaded when the model is opened again.

When you hit the front end with a plugin of type `list` from this extension, you'll see the table with the entries of type `My Model`.
There is also a `Extbase Variable Dump` showing up with an entry `myModels` which holds the entries including the `name`-field, but the relation `contentElements` is not resolved. It holds an empty object of type `TYPO3\CMS\Extbase\Persistence\ObjectStorage`.

What can I do to get the relation to tt_content fetched in order to get access to the UIDs of the assigned CEs?

# Update
After filling the relevant fields in the `Ttcontent` model and updating the persistence mapping in `ext_typoscript_setup.txt` the relation to tt_content is fetched.
This issue is finally solved now. Thanks to all contributors from the TYPO3 community that provided hints and the missing parts in the slack support channels.

I'll leave this repository available here in case someone is facing the same issues like me.
