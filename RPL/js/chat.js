function sendMessage() {
    const messageInput = document.getElementById('messageInput');
    const chatContainer = document.getElementById('chatContainer');
    
    const message = messageInput.value;
    
    if (message !== '') {
      const newMessage = document.createElement('div');
      newMessage.classList.add('message');
      newMessage.innerHTML = `
        <span class="sender">You:</span>
        <div class="content">${message}</div>
      `;
      
      chatContainer.appendChild(newMessage);
      messageInput.value = '';
      
      // Scroll ke bawah setiap kali ada pesan baru
      chatContainer.scrollTop = chatContainer.scrollHeight;
    }
}