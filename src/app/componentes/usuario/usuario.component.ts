import { Component,inject } from '@angular/core';
import { ActivatedRoute,Params,RouterLinkActive,RouterLink,RouterOutlet } from '@angular/router';



@Component({
  selector: 'app-usuario',
  standalone: true,
  imports: [RouterLinkActive,RouterLink,RouterOutlet],
  templateUrl: './usuario.component.html',
  styleUrl: './usuario.component.css'
})
export class UsuarioComponent {
  router:ActivatedRoute = inject(ActivatedRoute);
  id=0;
  nom='';
constructor() {
    console.log(this.router.snapshot.params['id']);
    //this.id = this.router.snapshot.params['id'];
    this.router.params.subscribe(
              (parametros:Params) =>
                          {
                          this.id=parametros['id'];
                          console.log(this.id);
                          this.nom=parametros['nombre'];
                          });
}

}
