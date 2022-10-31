import express, { response } from 'express';
// import stuffs from './json/stuffs.json' assert {type: 'json'}

const app = express();

app.use((req, res, next) => {
	res.setHeader('Access-Control-Allow-Origin', '*');
	res.setHeader('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content, Accept, Content-Type, Authorization');
	res.setHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
	next();
});

app.use(express.json());

/**
 * 
 * @param {string} url 
 * @returns {Promise<Array<String>|Error}
 */
const _ = async (url) => {
	return await fetch(url).then(
		(response) => {
			if (response.ok) {
				return response.json();
			} else {
				throw new Error(`HTTP ERROR - ${response.status}`);
			}
		}
	).then(
		(e) => {
			return e;
		}
	).catch(
		(err) => { throw new Error(`FETCH PROMISE ERROR - ${err}`) }
	)
}

/**
 * 
 * @returns {Array<*>}
 */
const stuffs = async () => {
	return await _('./json/stuffs.json').then(
		(stuffs) => {
			return stuffs.find((stuff) => stuff.id === "oeihfzeomoi");
		}
	)
}

app.use('/api/stuff', (req, res, next) => {
	const stuff = [
		{
		  _id: 'oeihfzeoi',
		  title: 'Mon premier objet',
		  description: 'Les infos de mon premier objet',
		  imageUrl: 'https://cdn.pixabay.com/photo/2019/06/11/18/56/camera-4267692_1280.jpg',
		  price: 4900,
		  userId: 'qsomihvqios',
		},
		{
		  _id: 'oeihfzeomoihi',
		  title: 'Mon deuxième objet',
		  description: 'Les infos de mon deuxième objet',
		  imageUrl: 'https://cdn.pixabay.com/photo/2019/06/11/18/56/camera-4267692_1280.jpg',
		  price: 2900,
		  userId: 'qsomihvqios',
		},
	];
	res.status(200).json(stuff);
});

app.post('/api/stuff', (req, res, next) => {
	console.log(req.body);
	res.status(201).json({
	  message: 'Objet créé !'
	});
});

export default app;