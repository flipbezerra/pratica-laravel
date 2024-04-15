<x-layout>
    <x-slot:titulo>Tarefas</x-slot:titulo>
    <h1>Bem vindo à página Tarefas</h1>
    @foreach($tarefas as $tarefa)
        @if($tarefa['concluida'])
            <li style="text-decoration: line-through;">{{ $tarefa['descricao'] }} - {{ $tarefa['horario'] }}</li>
        @else
            <li>{{ $tarefa['descricao'] }} - {{ $tarefa['horario'] }}</li>
        @endif
    @endforeach
</x-layout>