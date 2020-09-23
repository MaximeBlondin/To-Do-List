<?php /* Template Name: Ma ToDo */ get_header(); ?>
<style>
body {
    background: linear-gradient(to left, #6cbbb9, #b6dcdb);
    font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
}

h1 {
    border: solid 5px #3e8482;
    box-shadow: 2px 2px black;
    text-shadow: 2px 2px #499b99;
    font-size: 50px;
    color: black;
}

li {
    border-bottom: 1px solid #3e8482;
    padding: 10px 10px;
    color: #000000;
    font-size: 17px;
    width: 100%;
    cursor: pointer;
    text-align: center;

}

#btnNT {
    background: #3e8482;
    border: 5px solid #3e8482;
    border-radius: 8px;
    color: white;
    text-shadow: 2px 2px black;
}

#clear {
        margin: 12px 0;
        background: #3e8482;
        border: 5px solid #3e8482;
        border-radius: 8px;
        color: white;
        text-shadow: 2px 2px black;

    }

#myDIV {
    text-align: center;
}

#MesTodos {
    margin-top:50px;
    border-radius: 20px;
}

#jmbo {
    background-color: #499b99;
    margin-top: 10px;
    text-align: center;
}

#nouveauTodo {
    padding: 4px;
}

#test {
    background: #3e8482;
    border: 5px solid #3e8482;
    border-radius: 8px;
    color: white;
    margin-right:10px;
    text-shadow: 2px 2px black;
    float: right;
}

#check {
    float: left;
  
}

.copyright {
    color: black;
    text-align: center;
}

.description {
    
}

.jumbotron {
    background-color: #5eb3b0;
    box-shadow: 3px 3px black;
}
</style>

<div role="main">

    <section class="container">
        <div class="jumbotron">
            <div id="myDIV" class="header" col-12>

                <h1 class="animate__heartBeat">TO-DO LIST <svg width="1em" height="1em" viewBox="0 0 16 16"
                        class="bi bi-list-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                    </svg></h1>

                <form>

                <div>
                    <input type='text' id="nouveauTodo"/>
                    <button id="btnNT">AJOUTER</button>
                </div>

               </form>


                <ul id="MesTodos"></ul>




            </div>
        </div>
    </section>


</div>






<?php get_sidebar(); ?>

<?php get_footer(); ?>