import { Routes } from '@angular/router';
import { AppComponent } from './app.component';
import { TodoComponent } from './componentes/todo/todo.component';

export const routes: Routes = [
	{path:'listaTareas',component:TodoComponent},
];
