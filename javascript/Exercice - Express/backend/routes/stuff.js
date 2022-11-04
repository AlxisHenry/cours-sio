import express, { response } from "express";
import * as StuffController from "../controllers/stuff.js";

export const router = express.Router();

router.get('/', StuffController.getAllStuff);
router.post('/', StuffController.createThing);
router.get('/:id', StuffController.getOneThing);
router.put('/:id', StuffController.modifyThing);
router.delete('/:id', StuffController.deleteThing);