<style>
/*templates-parts/css-parts/footer-css.php*/
/*Moduls*/
/* image for wysiwyg */    
.alignleft {
	float: left;
	margin: 7px 28px 28px 0;
    height: auto!important;
}
.alignright {
	float: right;
	margin: 7px 0 28px 28px;
    height: auto!important;
}
.aligncenter {
	clear: both;
	display: block;
	margin: 7px auto;
    height: auto!important;
}
/* end image for wysiwyg */
/*Footer Customization*/



/* modals */
.custom-modal .trigger{
    text-align: center;
    padding: 7px 13px;
    background: #3e3e3e;
    color: #fff;
    font-size: 15px;
    outline: none;
    border: none;
    border-radius: 5px;
    font-family: cursive;
}

.custom-modal {
    position: fixed;
    left: 0;
    z-index: 999;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    visibility: hidden;
    transform: scale(1.1);
}
.custom-modal.transition {
    transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
}
.custom-modal .modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 1rem 1.5rem;
    width: 24rem;
    border-radius: 0.5rem;
}
.custom-modal .close-button {
    float: right;
    width: 1.5rem;
    line-height: 1.5rem;
    text-align: center;
    cursor: pointer;
    border-radius: 0.25rem;
    background-color: lightgray;
}
.custom-modal .close-button:hover {
    background-color: darkgray;
}
.custom-modal.show-modal {
    opacity: 1;
    visibility: visible;
    transform: scale(1.0);
    transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
}
/* end modals */




</style>









