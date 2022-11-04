import express, { response } from "express";
import * as UserController from '../controllers/user.js';

export const userRoutes = express.Router();

userRoutes.post('/signup', UserController.signup);
userRoutes.post('/login', UserController.login);
