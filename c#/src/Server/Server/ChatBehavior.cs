using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using WebSocketSharp;
using WebSocketSharp.Server;

namespace Server
{
    public class ChatBehavior : WebSocketBehavior
    {
        private static readonly List<ChatBehavior> _sessions = new List<ChatBehavior>();
        private readonly Form1? _form;
        
        protected override void OnOpen()
        {
            MessageBox.Show("Connection openned");
            _sessions.Add(this);
        }

        protected override void OnClose(CloseEventArgs e)
        {
            MessageBox.Show("Connection closed");
            _sessions.Remove(this);
        }

        protected override void OnMessage(MessageEventArgs e)
        {
            MessageBox.Show("Message received => " + e.Data.ToString());
            //_form.Invoke(new Action(() => _form.lbxMessages.Items.Add(e.Data.ToString())));
        }
    }
}