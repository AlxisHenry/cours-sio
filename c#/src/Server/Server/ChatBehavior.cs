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
        public static readonly List<ChatBehavior> _sessions = new List<ChatBehavior>();
        private Form1 formInstance;

        public Form1 FormInstance { get => formInstance; set => formInstance = value; }

        protected override void OnOpen()
        {
            _sessions.Add(this);
            FormInstance.UpdateClientCount();
        }

        protected override void OnClose(CloseEventArgs e)
        {
            _sessions.Remove(this);
            FormInstance.UpdateClientCount();
        }

        protected override void OnMessage(MessageEventArgs e)
        {
            FormInstance.AddMessageToListBox(e.Data);
        }
    }
}