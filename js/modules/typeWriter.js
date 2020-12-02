(()=>{

    const typeWriter = function(txtElement, words, wait = 3000){

        this.txtElement = txtElement;
        this.words = words;
        this.txt = '';
        this.wordIndex = 0;
        this.wait = parseInt(wait, 10);
        this.type();
        this.isDeleting = false;

    }

    // Type Method

    typeWriter.prototype.type = function(){

        // current index
        const index = this.wordIndex % this.words.length;
        console.log(this.wordIndex);
        console.log(this.words.length);

        //  get text of current index
        const fullText = this.words[index];

        // type speed
        let typeSpeed = 300; // initial 

        // check if deleting
        if(this.isDeleting){
            // remove Characters
            typeSpeed /= 2;
            this.txt = fullText.substring(0, this.txt.length - 1);
        }
        else{
            // add Character
            this.txt = fullText.substring(0, this.txt.length +  1);
        }

        // insert txt into element
        this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

        // check word is complete or not -> must be matched 
        if(!this.isDeleting && this.txt == fullText){
            // make Pause at end
            typeSpeed = this.wait;
            this.isDeleting = true;
        }else if(this.isDeleting && this.txt == ''){
            this.isDeleting = false;
            // move to next word
            this.wordIndex++;
            // Pause before start typing
            typeSpeed = 500;
        }


        setTimeout(() => this.type(), 300);
        console.log(fullText);

    }

    // InitonDOMLoad

    document.addEventListener('DOMContentLoaded', init);

    // Init App
    function init(){

        const txtElement = document.querySelector('.txt-type');
        const words = JSON.parse(txtElement.getAttribute('data-words'));
        const wait = txtElement.getAttribute('data-wait');

        // init typeWriter
        new typeWriter(txtElement, words, wait);

    }


})();