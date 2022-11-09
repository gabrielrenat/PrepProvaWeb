<div>
    <form method="POST" wire:submit.prevent="store">
        <div>
            @error('materia') <p>{{$message}}</p> @enderror
            @error('valor') <p>{{$message}}</p> @enderror
            @error('curso') <p>{{$message}}</p> @enderror
        </div><br />
        <input type="hidden" name='editId' wire:model="editId"/>
        <div>
            <label>Matéria: </label>
            <input type="text" name="materia" wire:model="materia" required />
        </div><br />
        <div>
            <label>Valor: </label>
            <input type="number" step="0.01" name="valor" wire:model="valor" required />
        </div><br/>
        <div>
        <label>Curso: </label>
        <select name="curso" wire:model="curso" required />
            <option value=""></option>
            <option value="Informática">Informática</option>
            <option value="Edificações">Edificações</option>
            <option value="Mecatrônica">Mecatrônica</option>
            <option value="Sistemas de Informação">Sistemas de Informação</option>
            <option value="Engenharia Civil">Engenharia Civil</option>
        </select>
        </div><br/>
        <div>
            <button type="submit">Enviar</button>
            <button type="button" wire::click="limpar()">Limpar</button>
        </div><br/>
    </form>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Matéria</th>
                    <th>Valor</th>
                    <th>Curso</th>
                    <th>Editar</th>
                    <th>Remover</th>
                </tr>
            </thead>
            <tbody>
                @foreach($provas as $prova)
                <tr>
                    <td>{{$prova->materia}}</td>
                    <td>{{$prova->valor}}</td>
                    <td>{{$prova->curso}}</td>
                    <td>
                        <button type="button" wire:click="editar({{$prova->id}})" > Editar </button>
                    </td>
                    <td>
                        <button type="button" wire:click="remover({{$prova->id}})" > Remover </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
