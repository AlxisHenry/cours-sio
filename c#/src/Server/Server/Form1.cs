using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Sockets;
using System.Net;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using WebSocketSharp;
using WebSocketSharp.Server;
using System.Linq;

namespace Server
{
    public partial class Form1 : Form
    {

        private WebSocketServer server;

        public Form1()
        {
            InitializeComponent();
        }

        public void AddMessageToListBox(string message)
        {
            if (lbxMessages.InvokeRequired)
            {
                lbxMessages.Invoke(new Action<string>(AddMessageToListBox), message);
            }
            else
            {
                lbxMessages.Items.Add(message);
            }
        }

        public void UpdateClientCount()
        {
            int count;
            lock (ChatBehavior._sessions)
            {
                count = ChatBehavior._sessions.Count;
            }

            if (lblClients.InvokeRequired)
            {
                lblClients.Invoke(new Action(() => lblClients.Text = "Clients connect�s : " + count));
            }
            else
            {
                lblClients.Text = "Clients connect�s: " + count.ToString();
            }
        }

        private void btnStart_Click(object sender, EventArgs e)
        {
            // R�cup�ration de l'adresse IP locale de la machine
            IPAddress ipAddress = Dns.GetHostEntry(Dns.GetHostName())
                                     .AddressList
                                     .FirstOrDefault(ip => ip.AddressFamily == AddressFamily.InterNetwork);

            int port = 8080;
            
            // D�marrage du serveur WebSocket sur l'adresse IP de la machine et le port 8080
            server = new WebSocketServer(ipAddress, port);
            server.AddWebSocketService<ChatBehavior>("/", behavior =>
            {
                behavior.FormInstance = this;
            });
            server.Start();

            // Mise � jour de l'interface graphique avec l'adresse IP et le port utilis�
            btnStart.Enabled = false;
            btnStop.Enabled = true;
            lblStatus.Text = "Serveur d�marr� � l'adresse " + ipAddress.ToString() + ":" + port.ToString();
        }

        private void btnStop_Click(object sender, EventArgs e)
        {
            // Arr�t du serveur WebSocket
            server.Stop();

            // Mise � jour de l'interface graphique
            btnStart.Enabled = true;
            btnStop.Enabled = false;
            lblStatus.Text = "Serveur arr�t�";
        }
    }
}