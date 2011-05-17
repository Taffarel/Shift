$(document).ready(function(){
				// Menssagens 
				$("#caixa-inscricao, #cover, #msg-box, .tabela-campeonato, .box-cadastro").hide()
				
				$(".x").click(function(){
					$(".msg").fadeOut();
					$("#caixa-inscricao").fadeOut()
					$("#cover").fadeOut();
					$(".tabela-campeonato").fadeOut();
					$(".box-cadastro").fadeOut();
					
					location.reload();
				});

				// Menu action
				$("li.action").hide();
				$(".menu-content").hover(
						function(){
							$(this).children("li.action").fadeIn();
						},
						function(){
							$(this).children("li.action").fadeOut();
						}
				);
				$(".menu-content .extras").hide();
				$(".menu-content").click(function(){
					$(this).animate({"height": "130px"}, function(){
						$(this).children(".extras").fadeIn();				
					});
				});

				$(".menu-content").mouseleave(function(){
					$(this).children(".extras").fadeOut("fast");	
					$(this).animate({"height": "16px"});
						
				});
							
				
				
				// Menu Header
				$("#menu li").hover(
						function(){
							$(this).children("ul").slideDown("fast");
						},
						function(){
							$(this).children("ul").slideUp("fast");
						}
				);
			});