import mongoose from "mongoose";

const productSchema = mongoose.Schema({
  name: { type: String, required: true },
  description: { type: String, required: true },
  price: { type: Number, required: true },
  inStock: {type: Boolean, required: true}
});

export const Product = mongoose.model('Products', productSchema)