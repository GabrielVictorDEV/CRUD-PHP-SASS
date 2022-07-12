<?php
// Sessão
session_start();
if(isset($_SESSION['mensagem'])): ?>
<script>	
	function deletar(){
		let modal = document.querySelector('.modal-container');
        modal.style.display = 'block';

        const divMessage = document.querySelector(".alert");
        const msg = "Deletar Cliente cancelado";

        const message = document.createElement("div");
        essage.classList.add("message");
        message.innerText = msg;
        divMessage.appendChild(message);
        setTimeout(() => {
        	message.style.display = "none" ; 
        }, 3000); 
	}

    deletar();
</script>
<?php
endif;
session_unset();

?>