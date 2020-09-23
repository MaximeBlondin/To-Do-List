			<!-- footer -->
			<footer class="footer" role="contentinfo">

			  <!-- copyright -->
			  <p class="copyright">
			    &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
			    <a href="//wordpress.org" title="WordPress"><span>WordPress</span></a> &amp; <a href="//html5blank.com" title="HTML5 Blank"><span>HTML5 Blank</span></a>.
			  </p>
			  <!-- /copyright -->

			</footer>
			<!-- /footer -->

			</div>
			<!-- /wrapper -->

			<?php wp_footer(); ?>

			<!-- analytics -->

			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

			<script>

			function deleteSuccess(data, success) {
				let selecteur = '#todo-'+data.ID;
				
				$(selecteur).remove();
				
			}

			function clickDelete() {

			

				let post_id = $(this).attr('post_id');
				


				$.ajax({
					'url' : '/?rest_route=/dswt/todo&MON_ID='+post_id,
					'method' : 'DELETE',
					'success' : deleteSuccess
				});

			
			}


			function obtenirTodos(data,status) {
				
				let todos = $('#MesTodos');
					
				$(data).each(function(position, todo) {
					
					todos.css( "background-color", "white" );

					let li = $('<li></li>');
						
					let texte = $('<span />');
					texte.addClass('description');
					let btnX = $('<button id="test">x</button>');
						btnX.click(clickDelete);
						btnX.attr('post_id',todo.ID);

					li.attr('id', 'todo-'+todo.ID);

					let btnEdit = $('<button id="test">EDIT</button>');
					btnEdit.click(clickEdit);
					btnEdit.attr('post_id',todo.ID);

					texte.text(todo.post_title);
					li.append(texte);
					li.append(btnX);
					li.append(btnEdit);
					todos.append(li);
					
				})
			}
			

			function nouveauTodo(data, status) {
			
				let todos = $('#MesTodos');

				if (status == "success") {

					let li = $('<li />');
		
					    li.attr('id','todo-'+data.id);

					let texte = $('<span />');
					texte.addClass('description');
				

					let btnX = $('<button id="test">x</button>');
					    btnX.attr('post_id', data.id);
					    btnX.click(clickDelete);

					
					let btnEdit = $('<button id="test">EDIT</button>');
					btnEdit.click(clickEdit);
					btnEdit.attr('post_id',data.id);

					texte.text(data.titre);
					li.append(texte);
					li.append(btnX);
					li.append(btnEdit);
				    todos.append(li);
					
									
				}

			}


			function inputTexteFocusOut(){
				let post_id = $(this).attr('post_id');
				let titre = $(this).val();
				
				modifierPost(post_id,titre);	

			}

			function clickEdit(){
				console.log(this);
				let post_id = $(this).attr('post_id');
				let li = $(this).parent();
				let champsTexte = li.find('.description');
				let texte = champsTexte.text();
				champsTexte.hide();
				let inputTexte = $('<input type="text"/>');
				inputTexte.attr('post_id', post_id);
				inputTexte.val(texte);
				inputTexte.focusout(inputTexteFocusOut);
				li.append(inputTexte);
				
			}


			function modifierPostReponse(data) {
				console.log(data);
				let selecteur = '#todo-'+data.id
				let li = $(selecteur);
				let champsTexte = li.find('.description');
				champsTexte.text(data.titre);
				champsTexte.show(1000);

				let inputTexte = li.find('input');
				console.log(inputTexte);

				inputTexte.remove();
				

			}

			function modifierPost(id, titre) {

				$.ajax({
						'url' : '/?rest_route=/dswt/todo',
						'method' : 'POST',
						'data' : {
							'titre' : titre,
							'id' : id
						},
						'success' : modifierPostReponse
					});
			}


			  $(document).ready(function() {

				$.ajax({
					'url' : '/?rest_route=/dswt/todo',
					'method' : 'GET',
					'success' :obtenirTodos
				});

				$('#btnNT').click(function(){


					let todoText = $('#nouveauTodo').val();
					               $('#nouveauTodo').val('');

					if (todoText.length < 1 ) {
						alert("VOUS DEVEZ ÉCRIRE QUELQUECHOSE!!");
					}

				    $.ajax({
						'url' : '/?rest_route=/dswt/todo',
						'method' : 'POST',
						'data' : {'titre' : todoText},
						'success' : nouveauTodo
					});

					
					
				});
			   
			  });
			</script>

			</body>

			</html>