<x-layout>
    <x-slot:titulo>Tarefas</x-slot:titulo>
    <h1>Bem vindo à página Tarefas</h1>
    @foreach($tarefas as $tarefa)
        @if($tarefa['concluida'])
            <li style="text-decoration: line-through;">
                <a href="/tarefas/{{ $tarefa['id'] }}">
                    {{ $tarefa['descricao'] }} - {{ $tarefa['horario'] }}
                </a>             
            </li>
        @else
            <li>
                <a href="/tarefas/{{ $tarefa['id'] }}">
                    {{ $tarefa['descricao'] }} - {{ $tarefa['horario'] }}
                </a>
            </li>
        @endif
    @endforeach
</x-layout>