# Go Fullstack FR Quiz #
## Installation ##
Clone this repo, and run `npm install` from within the project directory.
## Using the app ##
Run `npm start` from within the project directory.

Choose the port your API is running on, and click TEST ROUTES to test your API.
## Schema ##
```
mongoose.Schema({
  name: { type: String, required: true },
  description: { type: String, required: true },
  price: { type: Number, required: true },
  inStock: { type: Boolean, required: true }
})
```
## Required endpoints ##
The frontend app requires the following endpoints with the correct behavior for all tests to pass:
* GET `/api/products`

Returns all products as `{ products: Product[] }`
* GET: `/api/products/:id` 

Returns product for given ID as `{ product: Product }`
* POST: `/api/products`

Request body contains:
```
{
  name: string,
  description: string,
  price: number,
  inStock: boolean
}
```
Creates product in database.

Returns product created in database (including `_id` field) as `{ product: Product }`
* PUT: `/api/products/:id`

Request body contains:
```
{
  name: string,
  description: string,
  price: number,
  inStock: boolean
}
```
Modifies product with given ID as per object provided in request body.

Returns `{ message: 'Modified!' }`
* DELETE: `/api/products/:id`

Deletes product with given ID.

Returns `{ message: 'Deleted!' }`
