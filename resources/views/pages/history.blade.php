@extends('layouts.app')
@section('content')

<div class="container-fluid app-body">
    
    
    <h3>History Page 
        <div id="app_root">
            <history></history>
        </div>
    </h3>

    <div class="row">
		<div class="col-md-12">
			<table class="table table-hover social-accounts"> 
				<thead> 
					<tr>
                        <th>Group Name</th> 
                        <th>Group Type</th> 
                        <th>Account Name</th> 
                        <th>Post Text</th> 
                        <th>Time</th> 
                    </tr> 
				</thead> 
				<tbody> 
                    @foreach ($bufferPosts as $bufferPost)
                        
                        <tr>
                            
                            <!-- <td>>  {{ $bufferPost }} </td> -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

<script>
    
</script>