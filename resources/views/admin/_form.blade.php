<input type="hidden" name="client_type" value="{{$clientType}}">
@component('form._form_group', ['field' => 'name'])
    {{ Form::label('name', 'Nome',['class' => 'control-label']) }}
    {{ Form::text('name',null,['class' => 'form-control'] )}}
   <!-- <label for="name">Nome</label>
    <input type="text" class="form-control" id="name" name="name" value="{{old('name',$client->name)}}"> -->
@endcomponent

@component('form._form_group', ['field' => 'document_number'])
    {{ Form::label('document_number', 'CNPJ/CGC', ['class' => 'control-label']) }}
    {{ Form::text('document_number',null,['class' => 'form-control']) }}
@endcomponent

@component('form._form_group', ['field' => 'date_birth'])
    {{ Form::label('date_birth', 'Data de Nascimento', ['class' => 'control-label']) }}
    {{ Form::date('date_birth',null,['class' => 'form-control']) }}
@endcomponent

@component('form._form_group', ['field' => 'email'])
    {{ Form::label('email', 'E-mail', ['class' => 'control-label']) }}
    {{ Form::email('email',null,['class' => 'form-control' ])}}
@endcomponent

@component('form._form_group', ['field' => 'phone'])
    {{ Form::label('phone', 'Telefone', ['class' => 'control-label']) }}
    {{ Form::email('phone',null,['class' => 'form-control' ])}}
@endcomponent


@if($clientType == \App\Client::TYPE_INDIVIDUAL)
    @php
        $maritalStatus = $client->marital_status;
    @endphp
    @component('form._form_group', ['field' => 'marital_status'])
    {{ Form::label('marital_status', 'Estado Civil',['class' => 'control-label']) }}
    {{ Form::select('marital_status', [
         1 => 'Solteiro',
         2 => 'Casado',
         3 => 'Divorciado'
         ],null,['class' => 'form-control'])
         }}
    <!--<label for="marital_status" >Estado Civil</label>
    <select class="form-control" id="marital_status" name="marital_status" >
        <option value="" >Escolher...</option>
        <option value="1" {{old('marital_Status',$maritalStatus) == 1?'selected="selected"':''}}>Solteiro</option>
        <option value="2" {{old('marital_Status',$maritalStatus) == 2?'selected="selected"':''}}>Casado</option>
        <option value="3" {{old('marital_Status',$maritalStatus) == 3?'selected="selected"':''}}>Divorciado</option>
    </select>
    -->
    @endcomponent

    <div class="custom-radio">
        <label for="">
            {{ Form::radio('sex','m')}}Masculino
        </label>
    </div>

    <div class="custom-radio">
        <label for="">
            {{ Form::radio('sex','f')}}Feminino
            <!--<input type="radio" name="sex" value="f" {{old('sex',$client->sex) == 'f'?'checked="checked"':''}}>-->
        </label>
    </div>

    <div class="form-group">
        {{ Form::label('physical_disability', 'Deficiência Física') }}
        {{ Form::text('physical_disability',null,['class' => 'form-control' ])}}
    </div>
@else
    <div class="form-group">
        <label for="company_name">Nome Fantasia</label>
        <input class="form-control" name="company_name" value=null>
    </div>
@endif
<div class="custom-checkbox">
    <label>
        {{ Form::checkbox('defaulter',1,null )}}Inadimplente
        <!--<input type="checkbox" id="defaulter" {{old('defaulter',$client->defaulter)?'checked="checked"':''}}>Inadimplente? -->
    </label>
</div>

