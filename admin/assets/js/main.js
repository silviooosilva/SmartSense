tentativas = 3
sudo = prompt("Admin Password: ")
while (sudo != "@root") {
    if (sudo != "@root") {
        alert('Senha Incorrecta')
        sudo = prompt("Admin Password: ")
        tentativas -= 1
        if (tentativas <= 0) {
            alert("Tentativas Excedidas... Será redirecionado a página inicial! Contacte o suporte técnico, Obrigado!")
            window.location.href = './../'
            break
        }
    }
}