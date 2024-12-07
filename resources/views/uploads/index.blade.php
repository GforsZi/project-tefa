<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <h1>uploads page</h1>
  <table border="1">
  <tr>
  <td>user-name</td>
  <td>name-foto</td>
  <td>foto-url</td>
  <td>caption</td>
  <td>description</td>
  </tr>
  @foreach ($fotos as $foto)
  <tr>
  <td>{{$foto->user->nik_name}}</td>
  <td>{{$foto->name_foto}}</td>
  <td>{{$foto->url_foto}}</td>
  <td>{{$foto->caption}}</td>
  <td>{{$foto->description}}</td>
  </tr>
  @endforeach
  </table>  
  <table border="1">
  <tr>
  <td>user-name</td>
  <td>name-script</td>
  <td>script-url</td>
  <td>caption</td>
  <td>description</td>
  </tr>
  @foreach ($scripts as $script)
  <tr>
  <td>{{$script->user->nik_name}}</td>
  <td>{{$script->name_script}}</td>
  <td>{{$script->url_script}}</td>
  <td>{{$script->caption}}</td>
  <td>{{$script->description}}</td>
  </tr>
  @endforeach
  </table>
  </table>  
  <table border="1">
  <tr>
  <td>user-name</td>
  <td>name-pages</td>
  <td>pages-url</td>
  <td>caption</td>
  <td>description</td>
  </tr>
  @foreach ($pages as $page)
  <tr>
  <td>{{$page->user->nik_name}}</td>
  <td>{{$page->name_page}}</td>
  <td>{{$page->url_page}}</td>
  <td>{{$page->caption}}</td>
  <td>{{$page->description}}</td>
  </tr>
  @endforeach
  </table>
  </table>  
  <table border="1">
  <tr>
  <td>user-name</td>
  <td>name-video</td>
  <td>video-url</td>
  <td>caption</td>
  <td>description</td>
  </tr>
  @foreach ($videos as $video)
  <tr>
  <td>{{$video->user->nik_name}}</td>
  <td>{{$video->name_video}}</td>
  <td>{{$video->url_video}}</td>
  <td>{{$video->caption}}</td>
  <td>{{$video->description}}</td>
  </tr>
  @endforeach
  </table>
</x-layout>