import mongoose from 'mongoose';
import uniqueValidator from 'mongoose-unique-validator'

const userSchema = mongoose.Schema({
  email: { type: String, required: true, unique: true },
  password: { type: String, required: true }
});

userSchema.plugin(uniqueValidator);

export const User = mongoose.model('User', userSchema);