import { Injectable } from '@angular/core';
import { Todo } from '../modelos/todo';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class TodoService {
  constructor(private http:HttpClient) { }

  
  public listaTareas():Observable<Todo[]> {
    //Recurso a utilizar
    let api = 'https://jsonplaceholder.typicode.com/todos/';
    //peticion asincrona al servicio
    return this.http.get<Todo[]>(api);
  }
}
