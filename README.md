openchars
=========

Openchars(Working name) is a tool for archiving, accessing, and viewing what hopefully will be a vast collection of 2d cel animations for use in RPG maker type games.  

Basic Elements
---------

    -Character Cel Menu: This is where semi-transparent images(Cels) are laid across eachother to produce a final image of a character and where the buttons required to manipulate the Cels are exposed to the user.  
    
    -Upload Menu: This is where new art is contributed. Each piece of art has some required metadata, being it's Name, Category, Author, and License, as well as optional tags to provide further information. Name, Category, Author, and License are all also treated as if they are tags.  
    
    -Fine Tuning Menu: This is where the currently selected Cel can be adjusted. Currently the only fine adjustment planned is the ability to force a Cel to appear on a nonstandard layer but more will be added as the case varies.  
    
Detailed Elements
---------
Openchars is intended to provide all the functionality of the charaset generators at http://charas-project.net in a modern package.  

I'm not great at separating the work in web development projects so I'm going to try and keep things up to date on their face by keeping track of them in this readme file until I find a better way to plan this project. So, as a readme, this is going to be ridonculous. But if needlessly exhaustive documentation of a relatively simple task is your thing, then my man you have come to the right place. For right now, I'm adding to it as I finish parts of the project as well.  

 * HTML/CSS Components: The basic page layout is a static HTML page with a CSS layout suitable for Desktop PC's at this time but with the potential for a Mobile layout.  

    -Current Menu: This span contains a menu which displays buttons which manipulate the current image for the current layer. Planned buttons are  

         'switch to next picture category'  
         'switch to previous picture category'  
         'Switch displayed picture to next in category'  
         'Switch displayed picture to previous in category'  
         'move layer back one level(behind other pictures)'  
         'move layer forward one level(in front of other pictures)'  
         'sort by license - Not implemented yet'
         'apply filter to layer'  
         'save image as...'  
Might be fun to propose some social features. Lots of space for buttons in the new cleaner layout.  

         'Create Gallery' ('Create Demo'?)  
         'Share on Twitter/Facebook/Diaspora*/etc'  
    -Sprite Display: This window contains feedback about the image as it is generated. It gives back 3 things:  

         'On the far left, an image of the Sprite with all layers as it would be exported to a PNG'  
         'Right of the full preview, a preview of the current picture on the current layer'  
         'Right of the layer preview, layer information(layer position, image metadata)'  
    -Contribute Menu: Designed to make it easy to contribute new assets to the site. It has a button for selecting a file from the local disk, fields for entering information about the image and selecting which category to place it on by default.  
          
         'File Browser- Not implemented yet'
         'File Preview changes the sprite preview to include the new image without uploading'
         'Meta Name Entry input textbox for a descriptive name for the image'
         'Meta Tags Entry input textbox takes a comma delimited list of tags describing the image'
         'Meta License Entry- Not Implemented yet'
         'Meta Authorship entry for image creators to take credit for their own work'
         'Confirm Upload button posts the new image and accompanying metadata to the server where it is saved. '
 * PHP Components: The idea is to do very little on the server-side other than retrieve the image files for placement on the page and for saving files to the server. It's *just* handing the information to the client program to display.  

    -Contribute Image(contrib.php)  

         'instantiate a new image reference, fill it, and push it into the appropriate list'
    -Image Objects(image.php)The image object contains definitions associated with retrieving or changing the content of a single image.  

         '$img_src is the directory location of the image on the server.'
         '$name is the descriptive name of the image'
         '$age is the date the image was added to the directory'
         '$uid is the unique ID of the image refered to by the instance'
         '$license references the terms under which the image is released'
         '$auth is the author of the image'
         '$layer is the default layer upon which the image appears'
 * Javascript/jQuery Components: The Javascript/jQuery components are the most important. I'm pretty sure I need to be binding functions to the HTML events above, but I need to get a clear picture of what I'm doing before I do this section.  
    -buttons.js: all the click event handlers for everything that qualifies as a "Button" in the application gathered into one place. Decorations and effects that apply to all "Button"s Intended solely to call functions located elsewhere in code.  
    -preview.js: all the functions necessary for generating an image preview and scaling the preview to an appropriate size.  

         'Update Preview'
         'Make Transparent'
         'Zoom Image'
    -getlist.js: pulls a list of images down off the server and stores them on the client.  

         ''
    -contribute.js: contains functions for encapsulating and uploading user contributed content.  

         'Image Listing Object, used to retrieve the cel image from the server without revealing the URL'
         'variables: listing.location, listing.name, listing.age, listing.tags, listing.auth, listing.layer'
         'getters: location, name, age(age-date), tag(searchterm), auth, layer'
         'Image "listing" object'
         'Advance file upload menu'
         'Advance metadata entry menu'
         'Advance confirmation menu and return to file upload menu'

