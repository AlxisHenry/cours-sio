import express, { response } from "express";
import * as StuffController from "../controllers/stuff.js";
import { Auth } from "../middleware/auth.js";
import { Multer } from "../middleware/multer-config.js";

export const stuffRoutes = express.Router();

stuffRoutes.get('/', Auth, StuffController.getAllStuff);
stuffRoutes.post('/', Auth, Multer, StuffController.createThing);
stuffRoutes.get('/:id', Auth, StuffController.getOneThing);
stuffRoutes.put('/:id', Auth, Multer, StuffController.modifyThing);
stuffRoutes.delete('/:id', Auth, StuffController.deleteThing);