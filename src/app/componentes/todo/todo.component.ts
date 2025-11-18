import { Component } from '@angular/core';
import { Todo } from '../../modelos/todo';
import { TodoService } from '../../servicios/todo.service';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';
import { CommonModule } from '@angular/common';
@Component({
  selector: 'app-todo',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './todo.component.html',
  styleUrl: './todo.component.css'
})
export class TodoComponent {
  public listaTareas:any;
  constructor (private servicio:TodoService) {
    this.consultaTareas();
  }
  public consultaTareas() {
    let tareas = this.servicio.listaTareas().subscribe({
    //función a ejecutar si la petición ha ido bien
    next: (todos) => { 
                      console.log(todos);
                      this.listaTareas=todos;
                    },
    //función a ejecutar si hay un error
    error: (error) => console.log('Algo fue mal',error),
    //funcion a ejecutar si la tarea se completa
    complete: () => console.log('Tarea completada')
    })
  }  
}
