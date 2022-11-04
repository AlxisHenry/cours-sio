/**
 * Express
 */
import express, { response } from "express"
import mongoose from "mongoose"
import bodyParser from "body-parser"

/**
 * Routers
 */
import { stuffRoutes } from "./routes/stuff.js"
import { userRoutes } from "./routes/user.js"

/**
 * Env
 */
import dotenv from "dotenv"
dotenv.config()

/**
 * App
 */
import path from 'node:path';
import { fileURLToPath } from 'node:url';
const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

/**
 * MongoDB connexion to cluster
 */
mongoose
  .connect(
    process.env.MONGO_URI,
    { useNewUrlParser: true, useUnifiedTopology: true }
  )
  .then(() => console.log("Connexion à MongoDB réussie !"))
  .catch(() => console.log("Connexion à MongoDB échouée !"))


/**
 * Configuration
 */
const app = express()

app.use((req, res, next) => {
  res.setHeader("Access-Control-Allow-Origin", "*")
  res.setHeader(
    "Access-Control-Allow-Headers",
    "Origin, X-Requested-With, Content, Accept, Content-Type, Authorization"
  )
  res.setHeader(
    "Access-Control-Allow-Methods",
    "GET, POST, PUT, DELETE, PATCH, OPTIONS"
  )
  next()
})

app.use(bodyParser.json())
app.use('/images', express.static(path.join(__dirname, 'images')));

/**
 * Routing
 */
app.use("/api/stuff", stuffRoutes)
app.use("/api/auth", userRoutes)

export default app
