class importdados
{
    #email = document.querySelector("#Email").value
    #senha = document.querySelector("#Senha").value

    get email() {
        return this.#email
    }
    set email(email)
    {
        this.email=email
    }

    get senha() {
        return this.#senha
    }
    set senha(senha)
    {
        this.senha=senha
    }
}
