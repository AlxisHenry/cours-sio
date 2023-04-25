using System.IO;
using System.Text;
using WebSocketSharp;
using WebSocketSharp.Net.WebSockets;

namespace Client
{
    public partial class Form1 : Form
    {
        private WebSocket ws;
        private bool connected = false;

        public Form1()
        {
            InitializeComponent();
        }

        private void btnConnect_Click(object sender, EventArgs e)
        {
            // R�cup�ration de l'adresse IP et du port
            string ip = tbIp.Text;
            int port;
            if (!int.TryParse(tbPort.Text, out port))
            {
                MessageBox.Show("Le port doit �tre un entier valide.");
                return;
            }

            // Tentative de connexion au serveur
            try
            {
                this.ws = new WebSocket($"ws://{ip}:{port}");

                // Gestion des �v�nements de la connexion
                this.ws.OnOpen += (sender, args) =>
                {
                    this.connected = true;

                    // Activation des contr�les pour l'envoi de messages
                    tbMessage.Enabled = true;
                    btnSend.Enabled = true;

                    // D�sactivation du contr�le de connexion
                    btnConnect.Enabled = false;

                    // Activation du contr�le de d�connexion
                    btnDisconnect.Enabled = true;

                    // Affichage d'une popup de confirmation
                    MessageBox.Show("Connexion r�ussie !");
                };

                // Gestion des �v�nements de la d�connexion
                this.ws.OnClose += (sender, args) =>
                {
                    this.connected = false;

                    // D�sactivation des contr�les de connexion
                    btnConnect.Enabled = true;
                    btnDisconnect.Enabled = false;
                    tbIp.Enabled = true;
                    tbPort.Enabled = true;
                    tbMessage.Enabled = false;
                    btnSend.Enabled = false;

                    MessageBox.Show("D�connexion du serveur", "D�connexion", MessageBoxButtons.OK, MessageBoxIcon.Warning);
                };

                this.ws.Connect();
            }
            catch (Exception ex)
            {
                MessageBox.Show($"Erreur lors de la connexion au serveur : {ex.Message}");
            }
        }

        private void btnDisconnect_Click(object sender, EventArgs e)
        {
            this.ws.Close();
        }

        private void btnSend_Click(object sender, EventArgs e)
        {
            // V�rifie que la connexion est active
            if (connected)
            {
                // R�cup�re le message saisi par l'utilisateur
                string message = tbMessage.Text;

                // Envoie le message au serveur
                this.ws.Send(message);

                // Efface la zone de saisie
                tbMessage.Clear();
                MessageBox.Show("Message envoy� !", "Succ�s", MessageBoxButtons.OK, MessageBoxIcon.Asterisk);
            }
            else
            {
                MessageBox.Show("Vous n'�tes pas connect� au serveur.");
            }
        }
    }
}