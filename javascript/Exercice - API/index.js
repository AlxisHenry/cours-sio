import assert from 'assert'
import http from 'http'
import whoami from './json/whoami.json' assert {type: 'json'}

/*

  1. Créer un serveur HTTP : done
  2. Créer une route GET /api/system : done
  3. Renvoyer un objet JSON avec les propriétés ipaddress, language et software : done
  4. Tester avec Insomnia : done
  5. ?Déployer sur Heroku

*/

(http.createServer((req, res) => {
	
  const url = req.url

  switch (url) {
    case '/api/system':
      res.writeHead(200, { 'Content-Type': 'application/json' })
      res.end(JSON.stringify(whoami));
      break;
  }

})).listen(8080)
