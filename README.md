# custom search in wordpress for adding all our custom post type.

### to begin ...
we need to add those parameters in the search form:
 in the input name="s" and action =```<?php  echo esc_url( home_url( '/' ) ); ?>```
 
 ### After those setup up...
 just add in your theme functions file the code provided...
 
 ### Explanation
 
 the "pre_get_posts" hook will modify the normal query of wordpress, so that we  can put ours.
 we added condition to check if it's the search query (remember we passed in the name of the input field name="s").
 after that we set the query for post type that allow us to choose which custom post type we wanna make appear 
 in the search result.
 
 #### that's it!
