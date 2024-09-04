import './bootstrap';

function main(it, global){
    console.log("Hello from Javascript", it, this, global)
}


main(this, window)
