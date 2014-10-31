API Documentation
===============

### product

| Method    | Path                      | Description                                       |
| --------- | ------------------------- | ------------------------------------------------- |
| GET       | /product                  | Get the product                                   |
| GET       | /product/sort_by/{type}   | Get all the product sorted by type                |
| GET       | /product/{id}             | Get details of the product                        |
| POST      | /product                  | Create a new product                              |
| PUT       | /product/{id}             | Update product details, add photo to product, etc |
| DELETE    | /product/{id}             | Delete the product                                |

##### GET /product

Get the product

| Parameter                                 | Description                                                           |
| ----------------------------------------- | --------------------------------------------------------------------- |
| count _optional_ _(default: 50)_          | Limit the data that getted, if no value specify it will default to 50 |
| offset _optional_ _(default: 0)_          | Set the offset the data getted                                        |
| available _optional_ _(default: true)_    | Only get available product                                            |

##### GET /product/sort_by/{type}

Get all the product sort by specified type

| Available type    | Description                       |
| ----------------- | --------------------------------- |
| most_expensive    | Sort by most expensive product    |
| most_cheap        | Sort by most cheapest product     |
| newest            | Sort by newest product            |

| Parameter                                 | Description                                                           |
| ----------------------------------------- | --------------------------------------------------------------------- |
| count _optional_ _(default: 50)_          | Limit the data that getted, if no value specify it will default to 50 |
| offset _optional_ _(default: 0)_          | Set the offset the data getted                                        |
| available _optional_ _(default: true)_    | Only get available product                                            |


##### POST /product

Create new product

| Parameter                             | Description                               |
| ------------------------------------- | ----------------------------------------- |
| name _required_                       | Name of the product                       |
| price _required_                      | Price of the product                      |
| description _optional_ _(default: -)_ | Description of the product                |
| stock _required_                      | Stock of the product                      |
| color _required_                      | Color of the product                      |
| category\_id _required_               | ID of Category that the product belong to |

##### PUT /product/{id}

Update product details

| Parameter                             | Description                                   |
| ------------------------------------- | --------------------------------------------- |
| name _required_                       | Name of the product                           |
| price _required_                      | Price of the product                          |
| description _optional_ _(default: -)_ | Description of the product                    |
| stock _required_                      | Stock of the product                          |
| color _required_                      | Color of the product                          |
| category\_id _required_               |  ID of Category that the product belong to    |

##### DELETE /product/{id}

Delete product by ID

### contact

| Method    | Path                  | Description                   |
| --------- | --------------------- | ----------------------------- |
| GET       | /contact              | Get the contact               |
| POST      | /contact/             | Create a new contact          |
| GET       | /contact/type/{type}  | Get contact by type           |
| GET       | /contact/{id}         | Get details of the contact    |
| PUT       | /contact/{id}         |  Update contact details       |
| DELETE    | /contact/{id}         | Delete the contact            |

##### GET /contact

Get the contact

| Parameter                         | Description                                                           |
| --------------------------------- | --------------------------------------------------------------------- |
| count _optional_ _(default: 10)_  | Limit the data that getted, if no value specify it will default to 50 |
| offset _optional_ _(default: 0)_  | Set the offset the data getted                                        |

##### GET /contact/type/{type}

Get all the contact  by specified type

| Available type            |
| ------------------------- |
| bbm                       |
| whatsapp                  |
| call                      |
| sms                       |

| Parameter                         | Description                                                           |
| --------------------------------- | --------------------------------------------------------------------- |
| count _optional_ _(default: 10)_  | Limit the data that getted, if no value specify it will default to 50 |
| offset _optional_ _(default: 0)_  | Set the offset the data getted                                        |

##### POST /contact

Create new contact

| Parameter             | Description                           |
| --------------------- | ------------------------------------- |
| type _required_       | Type of the contact                   |
| value _required_      | Value of the contact                  |
| user_id _required_    | ID of User that the contact belong to |

##### PUT /contact/{id}

Update contact details

| Parameter             | Description                           |
| --------------------- | ------------------------------------- |
| type _required_       | Type of the contact                   |
| value _required_      | Value of the contact                  |
| user_id _required_    | ID of User that the contact belong to |

##### DELETE /contact/{id}

Delete contact by ID
