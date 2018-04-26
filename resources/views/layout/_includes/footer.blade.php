<footer>
 <div class="footer-copyright">
   <div class="container">
   @if(Auth::guest())
   <span class="">© 2018 Todos os direitos reservados.</span>
   <span class="right msg" href="#!">Faça o login para entrar!</b></span>
   @else
   © 2018 Todos os direitos reservados.
   <span class="right msg" href="#!">Bem Vindo: <b>{{Auth::user()->name}}</b></span>
   @endif
   </div>
 </div>
</footer>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('inputmask/dist/jquery.inputmask.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>



</body>
</html>
