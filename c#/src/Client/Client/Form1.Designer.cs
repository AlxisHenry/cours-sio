using System.Reflection.Metadata.Ecma335;
using System.Windows.Forms;

namespace Client
{
    partial class Form1
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        private void InitializeComponent()
        {
            lblIp = new Label();
            tbIp = new TextBox();
            lblPort = new Label();
            tbPort = new TextBox();
            btnConnect = new Button();
            btnDisconnect = new Button();
            tbMessage = new TextBox();
            btnSend = new Button();
            SuspendLayout();
            // 
            // lblIp
            // 
            lblIp.AutoSize = true;
            lblIp.Location = new Point(10, 14);
            lblIp.Name = "lblIp";
            lblIp.Size = new Size(17, 15);
            lblIp.TabIndex = 0;
            lblIp.Text = "IP";
            // 
            // tbIp
            // 
            tbIp.Location = new Point(63, 11);
            tbIp.Name = "tbIp";
            tbIp.Size = new Size(88, 23);
            tbIp.TabIndex = 1;
            tbIp.Text = "172.28.176.1";
            // 
            // lblPort
            // 
            lblPort.AutoSize = true;
            lblPort.Location = new Point(10, 41);
            lblPort.Name = "lblPort";
            lblPort.Size = new Size(29, 15);
            lblPort.TabIndex = 2;
            lblPort.Text = "Port";
            // 
            // tbPort
            // 
            tbPort.Location = new Point(63, 38);
            tbPort.Name = "tbPort";
            tbPort.Size = new Size(88, 23);
            tbPort.TabIndex = 3;
            tbPort.Text = "8080";
            // 
            // btnConnect
            // 
            btnConnect.Location = new Point(13, 72);
            btnConnect.Name = "btnConnect";
            btnConnect.Size = new Size(137, 31);
            btnConnect.TabIndex = 4;
            btnConnect.Text = "Connection";
            btnConnect.UseVisualStyleBackColor = true;
            btnConnect.Click += btnConnect_Click;
            // 
            // btnDisconnect
            // 
            btnDisconnect.Enabled = false;
            btnDisconnect.Location = new Point(13, 109);
            btnDisconnect.Name = "btnDisconnect";
            btnDisconnect.Size = new Size(137, 31);
            btnDisconnect.TabIndex = 5;
            btnDisconnect.Text = "Déconnexion";
            btnDisconnect.UseVisualStyleBackColor = true;
            btnDisconnect.Click += btnDisconnect_Click;
            // 
            // tbMessage
            // 
            tbMessage.Enabled = false;
            tbMessage.Location = new Point(13, 174);
            tbMessage.Name = "tbMessage";
            tbMessage.Size = new Size(270, 23);
            tbMessage.TabIndex = 0;
            // 
            // btnSend
            // 
            btnSend.Enabled = false;
            btnSend.Location = new Point(13, 203);
            btnSend.Name = "btnSend";
            btnSend.Size = new Size(270, 39);
            btnSend.TabIndex = 7;
            btnSend.Text = "Envoyer";
            btnSend.UseVisualStyleBackColor = true;
            btnSend.Click += btnSend_Click;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(384, 327);
            Controls.Add(lblIp);
            Controls.Add(lblPort);
            Controls.Add(tbIp);
            Controls.Add(tbPort);
            Controls.Add(tbMessage);
            Controls.Add(btnConnect);
            Controls.Add(btnDisconnect);
            Controls.Add(btnSend);
            Name = "Form1";
            Text = "Serveur de Chat";
            ResumeLayout(false);
            PerformLayout();
        }

        // Éléments de la fenêtre
        private System.Windows.Forms.Label lblServer;
        private System.Windows.Forms.Label lblIp;
        private System.Windows.Forms.Label lblPort;
        private System.Windows.Forms.TextBox tbIp;
        private System.Windows.Forms.TextBox tbPort;
        private System.Windows.Forms.TextBox tbMessage;
        private System.Windows.Forms.Button btnConnect;
        private System.Windows.Forms.Button btnDisconnect;
        private System.Windows.Forms.Button btnSend;

    }
}