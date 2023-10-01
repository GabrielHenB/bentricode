export default class FormController{
    constructor(formulario, classe = 'validate'){
        this.form = formulario;
        this.named = '.' + classe;
        this.events(); //Associa os eventos ao form
    }

    // ============== CONSTANTES DE VALIDACAO DPS ALTERAR ISSO 

    ALLOWED_EXT = ['jpg', 'jpeg', 'png', 'gif'];
    MAX_FILESIZE = 6 * 1024 * 1024; //6 MB
    PWD_MIN_LEN = 8;
    PWD_MAX_LEN = 24;
    NAME_MAX_LEN = 60;
    NAME_MIN_LEN = 2;
    STR_MAX = 255;
    EMAIL_MAX = 80;

    events(){
        this.form.addEventListener('submit', e => {
            this.handle(e);
        });
    }

    /**
     * Cleans 'form-error' divs inside <form> that is given as this.form
     */
    cleanError(){
        //Faz os erros nao repetirem no formulario em nova instancia
        for(let errorFields of this.form.querySelectorAll('.form-error')){
            errorFields.remove();
        }
    }

    /**
     * Creates a div with class 'form-error' and the message adjacent to 'f' element.
     * Optionally you can inform the insertAdjacentElement's location.
     * @param {HTMLElement} f 
     * @param {string} m 
     * @param {string} location 
     */
    throwError(f, m, location = 'afterend'){
        const errDiv = document.createElement('div');
        errDiv.innerHTML = m;
        errDiv.classList.add('form-error');
        //Append no final do elemento campo (f)
        f.insertAdjacentElement(location, errDiv);
    }

    handle(e){
        e.preventDefault();
        if(this.validateAll()){
            console.log("Formulario Válido! Enviando....");
            this.form.submit();
            return true;
        }else{
            this.throwError(this.form, "Ocorreram erros e não foi possível enviar!",'beforeend');
            return false;
        }
    }

    validateAll(){
        let isOk = true;

        //Faz os erros nao repetirem no formulario em nova instancia
        this.cleanError();

        for(let field of this.form.querySelectorAll(this.named)){
            const l = field.previousElementSibling.innerHTML; //Label do Field atual
            const fName = field.getAttribute('name'); //<input name>


            //Nao vazio
            if(!field.value && fName !== 'password' && field.type !== 'file'){
                isOk = false;
                this.throwError(field, `${l} não pode estar vazio!`)
            }

            //Se for <textarea>
            if(field.tagName === 'TEXTAREA'){
                console.log("Is textarea");
                //Nothing for now
            }

            //Se for type 'file'
            if(field.type === 'file'){
                console.log("File detected... as "  + field.type + " validating...");
                if(!this.validateFiles(field)) isOk = false;
            }

            //Isso validara cada campo a depender do <input name>
            if(fName){
                switch(fName){
                    case 'name':
                        if(!this.validateNames(field)) isOk = false;
                        break;
                    case 'email':
                        if(!this.validateEmail(field)) isOk = false;
                        break;
                    case 'password':
                        if(!this.validatePwd(field)) isOk = false;
                        break;
                    default:
                        break;
                }
            }else{
                this.throwError(field,"Um erro interno aconteceu!");
                isOk = false;
            }
        }
        return isOk;
    }

    validateFiles(field){
        let isOk = true;
        console.log(field);

        //Se nao for requerido e for nulo ok. Se nao for nulo ele precisa ser verificado normalmente.
        if(field.classList.contains('notRequired') && !field.value){
            return true; //Se nao for requerido e estiver vazio tudo ok
        }
        //Se for nulo
        if(!field.value){
            this.throwError(field, `Nenhum arquivo foi informado!`);
            return false; //Nulo nao precisa nem olhar se eh real
        }
        const theFile = field.files[0];
        //Se existir
        if(theFile){
            console.log(theFile);
            const extension = theFile.name.split('.').pop().toLowerCase(); //Extensao
            const size = theFile.size;

            if(!this.ALLOWED_EXT.includes(extension)){
                isOk = false;
                this.throwError(field, `A extensão ${extension} não é permitida!`);
            }

            if(size > this.MAX_FILESIZE){
                isOk = false;
                this.throwError(field, `O tamanho do arquivo excede o máximo de ${(this.MAX_FILESIZE / 1024)} KB`);
            }

        }else{
            isOk = false;
            this.throwError(field,"Arquivo inexistente!"); //Will it work if not required??
        }
        return isOk;
    }
    /**
     * Isso valida campos de senha no client side.
     * @param {HTMLInputElement} field 
     * @returns boolean
     */
    validatePwd(field){
        let isOk = true;
        //Se for um edit ele nao precisa validar se estiver vazio a string
        if(field.classList.contains('editUserPasswordInput') && field.value.length <= 0){
            console.log("Senha inserida:", field.value);
            return isOk; //Nao necessario validar ja que pode ser nulo nesse caso
        }
        //Tamanho
        if(field.value.length < this.PWD_MIN_LEN || field.value.length > this.PWD_MAX_LEN){
            isOk = false;
            this.throwError(field, `A senha deve ter entre ${this.NAME_MIN_LEN} e ${this.NAME_MAX_LEN} caracteres!`);
        }
        // TODO: depois melhorar essa Regex ta simples demais
        if(field.value.match(/\s/)){
            isOk = false;
            this.throwError(field, `A senha contém espaços!`);
        }
        return isOk;
    }

    /**
     * Isso valida campos de name. Se conter a classe excludeMatching nao verifica caracteres especiais.
     * @param {HTMLInputElement} field 
     * @returns boolean
     */
    validateNames(field){
        let isOk = true;
        let shouldMatch = true;
        
        if(field.classList.contains('excludeMatching')){
            shouldMatch = false;
        }


        if(field.value.length < this.NAME_MIN_LEN || field.value.length > this.NAME_MAX_LEN){
            isOk = false;
            this.throwError(field, `O Nome deve ter entre ${this.NAME_MIN_LEN} e ${this.NAME_MAX_LEN} caracteres!`);
        }
        if(shouldMatch && !field.value.match(/^[a-zA-Z0-9]+$/)){
            isOk = false;
            this.throwError(field, `O nome contém caracteres inválidos!`);
        }
        return isOk;
    }

    validateEmail(field){
        let isOk = true;
        if(field.value.length > this.EMAIL_MAX){
            isOk = false;
            this.throwError(field, "Tamanho do campo excedeu o limite");
        }
        return isOk;
    }

    validateString(field){
        let isOk = true;
        if(field.value.length > this.STR_MAX){
            isOk = false;
            this.throwError(field, "Tamanho do campo excedeu o limite");
        }
        return isOk;
    }
    
}