For RESTFUL actions:

-  To retrieve a full list of available categories:
    -  GET Request to http://westpennwiremarketing.com/api/categories/categories
    -  Response 200 if categories are found
    -  Returns (Array of categories):
         -   category_id - The ID of the category
         -   category_name - The web-friendly echo of the category (i.e. "Catalogs")
         -   category_desc - A description of the category
         -   category_limit -  A limit of the amount of copies allowed to be ordered (i.e. 100)
    -  Response 400 NULL if no categories exist

  -  To retrieve a full list of files/items available
      -  GET Request to http://westpennwiremarketing.com/api/items/items
      -  Response 200 if files/items are found

  -  To retrieve files/items in a specific category
      -  GET Request to http://www.westpennwiremarketing.com/api/items/items/category_id/{X}
         -  Replace {X} with the Category ID (i.e. "14" for items available under Catalogs)
      -  Response 200 if items are found
      -  Returns (Array of items)
          -  item_id - The ID of the item
          -  item_category - The ID of the item's parent category
          -  item_name -  The web-friendly echo of the item (i.e. "2015 West Penn Wire Catalog")
          -  item_location - The downloadable path for the item
          -  item_filename -  The filename of the item on the server
          -  item_description - The web-friendly echo of the item's description
          -  item_thumbnail  -  A 120x180 thumbnail of the item/file
          -  status -  An integer indicating the status of the item (1 for active, 0 for inactive)
          -  created_on  -  UNIX timestamp of the upload date
          -  updated_on  -  UNIX timestamp of the last update
          -  last_update  -  Web friendly echo of the last update (formatted mm/dd/yyyy)
