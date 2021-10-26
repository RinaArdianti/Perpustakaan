<x-admin-layout>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$title}}
        </h2>

        <div>
        <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1 ">
            <div class="grid grid-cols-12">
                <div class="col-span-6 p-4">
    <!-- menampilkan url untuk menampilkan halaman input petani-->
    <a href="{{route('anggota.create')}}">
        <button class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-purple-
        200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none">Tambah</button>
    </a>
        <button class="px-4 py-1 text-sm rounded text-green-600 font-semibold border border-green-
        200 hover:text-white hover:bg-green-600 hover:border-transparent focus:outline-none">Publish</button>
        <button class="px-4 py-1 text-sm rounded text-red-600 font-semibold border border-red-
        200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none">Delete</button>
    </div>
    <div class="col-span-6 p-4 flex justify-end">
    <input type="text" class="px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 rounded-
    none rounded-1-md sm:text-sm border-gray-300">
    <button class="rounded-r-md border border-1-0 px-4 py-1 border-gray-300 bg-gray-50 text-gray-
    500 text-blue-600 hover:text-white hover:bg-blue-600">Cari</button>
    </div>
    </div>
    <div class="py-2 align-middle inline-block min-w-full sm:px-4 lg:px-4">
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">

        </thead>

    </table>

    </div>

    </div>

        </div>
    </div>
        <div class="py-2 align-middle inline-block min-w-full sm:px-4 lg:px-4">
         <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            
              <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Nama
              </th>
            
            
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                NIM
              </th>
            
            
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Alamat
              </th>
            
            
              <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                Aksi
              </th>
            

              </tr>
              
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @foreach ($anggota as $item)
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center"><input type="checkbox" name="" id="">
              <div class="flex-shirnk-0 h-10 w-10">
                <img class="h-10 w-10 rounded-full" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUQEhIWExUVFRYVGBYWFhgVFRUXFRUXFhUVGBcYHSggGBolHhgWITEhJSkrLi4uHR8zODMtNygtLisBCgoKDg0OGBAQGi0lICUtMC0rLS0tLS0tLS4uLSstLS4tLS0tLS0tLS0rLS8tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABAECAwUHBgj/xAA/EAACAQIDBAcFBQYGAwAAAAAAAQIDEQQSIQUxQVEGBxNhcYGRIjKhsfBCUnLB0RQjgpLS4SRDU2KiwoOy8f/EABoBAQADAQEBAAAAAAAAAAAAAAABAgMEBQb/xAArEQACAQMDAwMEAgMAAAAAAAAAAQIDBBESITETQVEiMmEFFIGRcbEz4fD/2gAMAwEAAhEDEQA/AO0AA1OEAAAAAAAAAAFHK28ElQYZYleJjlinwSLKLNo21SXYlAhOvLmW9rLmyemzVWU/KJ4IHay5suVeXMdNh2U/KJoIkcU+KRkjiVx0IcGZytqkexnBSMk9zKlTBrHIAAIAAAAAAAAAAAAKXKFubuKZ+5kFjKCkSpJUAAAGOc0t7+vzLK2ItotWQ5TbZZQbOujbSlvLZEipiN9tDDLvd2Y875FXJmiWDvhTjD2ovS1sULc7KxZJdFQAWLAAAD6+JXj3XLZMo5vkVZVlyfG/16meGIa36kZSYzvkQ1kpOnGfuRsYTvuLzVqb4EyliOD9Sjh4OGratbx3JAAKHGCjKhgFov8AXqW5nyKZnyILGS/19MoLfX0igILwASQAAACLXr30W7mMRWvoiOaRj3Z6NtbY9UgADU7gAAAAAAajpD0mwuBipYmqoZr5YpOU5W32jHW3fuNufP3W9Uk9qVVLdGFKMPw5FL/2lMyqz0RyisnhHTsJ1o7NnLK6s6ffOnNR9Uml5nrcHi6dWCqUpxqQlulCSlF+DR8pG/6Eber4TFUnRbaqVIQnS+zVU5KNrfe10e9PuujCFw84aKqZ9KAA7DQAAAAAAzUa1tHu+RLTNcZqFW2j3fIzlHujjuLfV6o8kwAGR5gAAAAAAAAAMGJq20W8y1J2VyBJ3fey8FlnXa0tUtT4RQC4Nj1AAAAAAAAUnNJOTaSSu23ZJLe2+CAKnIOvPZUVOji1KOaS7GcbrM0ryhNR3tayTf4Sb006x52dPAThBXku3m1eeXSXYxaaavpml5LczkuNnUnLta0pTlNZs85OUpLm23c5K1WLWlGcpJ7EvYOwa+MqdlQjFvi5TjCMb8W27vwSb7jtHQfq5pYGSr1ZdtiFudrU6V9+RPVy4Zn5JanBGj1vRrpvjsIs0avbUYyUZUqzct/3ZP2obnudu5mVKUIvdFU0uT6HBouiXSuhtCm50m4zjbtKUvfg3u8YvhJaed0b07001lGoABJIABAAAAJOFq/Zfl+hJNaidRqZlcymu55t3S0vWjIAChxAAAAApJ2VwSRsXP7P1vRgT+u4pPXUtyG6jhHs06eiKiXp9/nqL+W8syDJ3jBfBe3+XnoULVAuJRKAAJJBxvrU6aOpW/YKMrUqc49tJf5k003T/BHjzfhr0rpltr9jwdbEr3oxtBPjUn7MPK7TfcmcA6J7DnjcSqabsnnq1Hq0r3bvxlJ6LzfA5bmrpWCk32J2ycBUxU5qku2hmm3HI/YbbcXGo7KLej3o2eL6M42nGnUqU3NRi86i1UcZWlaplj7yWm46jgMDToQVKlFQjHclz4t82+LJFjyncvOxnpOR7J6N4rERjOMbvJNRryShG8mstlLWS36pcTHj9iYjCRlPEwc1eH72EVKMbJrM7fd01kkdgsHG+j+u4j7l5Gk+ftk7Yq4PExxNKeacZau7y1Yv3oS7mvR2fBH0psbaUMTQp4mk7wqRUlzXOL707p96OJdZHRNYdrFUFalJqM4LdTk9zjyg91uD8dPW9Ru082GrYZvWlUU4rlCqv6oyfmejaVc7ItHZ4OmAA7zUC4KOJBDLr/XeU4eW7vLcgyEYIwX318/QyYepZ9z08DBk7ysY2GMlZwUotM2YLaUrpMuMDxWmnhgAAgGHFS0tzMxFxb1S7i0Vub20dVREcAG57AAAAAAAAAByzr3x9qWGwyfvznVf/jioxv51H6Enqz2UqOChUa9uv+9k/wDa9Ka8Mtn4yZ5nr0xF8bThwhhk/OdSpf4RidI2VBRoUorcqVNLwUEePfy3wZPklAA84kAAAhbb2esRh6uHf+ZBxXc7ey/J2fkct6oMc6O0o05adtCpSa4ZortFfzg15nX0cJwGI7DasZrRQxz/AJe3cX8Gzss5YkQz6UAB7pqAAAAAAAAASsJLeiQQsM/a8SaYTW55N1HFR/IABU5gQsS/aZMuQq29+JeHJ2Wa9bfwYwAbHpgAAAAL69SCAABkZOBdcs820pL7tGlH4Sl/2Om9Gq+fCYef3qFN/wDBHNusWgqm16qlKMleEHFN5lloJq68eR7nq+lL9goxlbNBSg0ne1pOyfflcTxrxZbfyZZ3PRAA4CwAAAR87bdm/wBpxEk9e3rNPvVSTTPoqPF8lf4nBMZg4Vat4pRhOpJ9op5s+Z3slbSbve3idVsuWVkz6TwlXPCE/vRjL+ZJmU1fRV3wWF1v/h6Kb5tU4pvcbQ91PKNcgCwJAABJIADAL6T1XiTzXrf5/XiT7mNQ8693aZUFL/Wv6AocRY5ohVamr8TYkHEL2mXhyddm/W18GNAA2PTAAABTMVBBBa6hVzKhtLV7hgYPnvpjipS2jiKkKcLqvNZtbyyrs9XfTyPQ9WG3HmlgqrWaS7SD4zaVpp8G7RT8mc1xuK7WpUq/6tSdR/xyctfUpg8TKlONWm8s4SUovk1+XdyPJqrWmjHufSANT0Y27DG0I1oWUt1SF9YT4rw4p8UbY85pp4ZcAEbaOPp0Kcq1WShCKu2/gkuLe5JbyAanpvth4bCzyNdpUXZwvwvbNLyWvocdVSdrQjCGWak1FOzkrb/XcZOle3546u6sk4wXs04fcj3/AO5735LgadnfSjpjgoz6X6FVc2AwrstaFO6W5PKr21N12h5LqnxXabMoc6faU3/DUlb/AIuJ689eG8UapbFufgXAFiQACSQGAAUjPW/eTu0REprVeKNgY1DzrzlFn1x/UF4KHFkETFrVPuJZgxcdL8i0Hub20tNREQAG564AAAAAANR0vxvYYHE1tzjRqW/E4uMfi0bc8D104/s9nqkt9erCH8ML1JeXsxXmUm8RbIb2OEpFQDzDE23RbalXD4mnKjKznOEJJ6xnGUkrSXHfpyO7U8dF79GcB2HBuvBrRwee/Jx1T9bHYdibdpVrQrKMKnPdGfhyfd6GFejKS1pHRChOVNzS2N7UxsFud/A431ibVrVsXOlOX7uk1kgtIq8Ity75avVnUdtbVo4ZWUVKo1pHfbvk+C+LORdLpSnW7ebu6i1drK8dLLkrW9CLejLGt8B0J9PqY2NGADoOc651E7R9nE4Vvc41o+Elkn6ZYep1c+eOqzaPYbSo30VVSov+NXj/AM4wPoc76EswNIcAAG5cAAAAAAy4Ze0iaRsHHe/IkmE3ueVdyzU/gAAqcoKTjdWKgEp43Nc0UZnxULO/P53RhW+/f9M3UsntQqa4qSKALyH9/wCxOS+QA7fL5IBBA4l13bUVTFUaEXdUabk7PTNVlu8lCPqdR2tjW5OmnaK0fe/0PnjpDju3xNatvUpvL+GPsw+CRhcSxHBxRulVqyhFbLl/JrysYttJat6LxZQvw/vxvuzRv6o4Tc67s/o3B4Km4UIQqulCTkopSc1BOSct7TdzUbK2VOvK1nGK96TW7uXNnutlQXYUo6ZVBWd9V7PLiSIRjaOkUtd1l7Tu9fFnpKOyPNtvq9a2pVKcd23s328/6PFbe2G6f72neUPtJu8o99+K+Xyz7A2DTq0nOvSjUUnaKkr2Surrk3r5I9hlXFRvZ6cOFr8OZbRhGKy2jFLKklpFWTtotyJwitT6xXqWvQk98+7vjw/nON/BwrpZhIUcZWpUo5YRlFKN27XhFvV672zUm56ZSbx2Jv8A6rXokvyNMedP3M9Clnpxz4X9F+HxEqc41Y+9TlGcfxQakvikfVeExCqQhVjrGcYzXhJJr4M+UTvHVltVvB4eLd45ez8HCTgvLRHRbPdomdeNJrVw3g92APr5HWzpYBVfX6FOHl53GSMgFeK8S+hC7XJfWpGSJTUU2yXRjZJF4BgeLJuTbYAAKgAAGOtTzKxr3Fm0I+KpfaXmXg+x2WtXS9L4ZDyvmLPmXA1PSLUnzLgASc86W7Q7HC16t/ayuMfxTeWPxdzhyR0zrYxlqVGivt1JTfhBWXxn8Dw2wNiVcXV7KkrWV5TfuwjzfN8lx9Wcdw3KelHjfT0qdF1Jd2a0upQcpKKV22klzbdkj1fTDo5QwVKmlOdStUlvbSioxXtNRS5uK1b3sx9XuxXXxKrNfu6LUm+DmtYRXenaT8FzMum9Wk6vuYdJ1Vwdao01GMYr7KS9FYvKA9LB8xqYKlABk4j0wpuONxCf+o35SSkvgzU5Xa9tL2vwvvt8GdA60Niu8cbBXVlCp3a+xP45X/CaGtgLbJp1ktXipOT7ssqa+MfiefOm9Uv2fR0LiLpQfnC/J5w6t1X1b4Nr7taa9VGX5nKTqvVfStg5S+9Wm/SMY/8AUm295n9S/wAH5R12D0XgGmUp7l4L5Fx3HrLgtyvmLPmXADBbZ8ydhqWVa7zFhqV9WSzOb7Hn3dXL0L8gAGZwgAAAAAAAAEOvStqt3yMJsWiJWo21W75GsZdmenb3Gr0y5MIANDsOB9bDf7RSXBUnbzm7/JHoOrDDKODdRe9UqSbf4fZS+D9SR066NvGU4yp2VWm3lT0U4y96N+D0TT/W5B6uJ1aUamDr0505Rl2kM0Wk1Kykk9zs1fTn3HOotVcvufNyqKdmoxe65Rm230RljMU61arlpRUYQhDWbitXdvSN23uvpY9NgMFToU40qUVCEdyXxbe9t82SAbKCTycE605xUW9lwgACxmAAAWVqUZxcJpSjJNNPVNPRpo87jOjKjga2DptyTcp0k98XdTjFvj7SavyZ6UEOKZeFSUOH3z+j55Z27olgexwdGm1Z5M0lylP22vjY8vtXoS5Y+E4x/wAPUk6lTlFx9qcPCT3eL5HQGc9Cm4ttnoX91GrCCj/L/wC/Z6ynuXgvkXFtPcvBfIuOk+jjwgZKNLM+4UqTl4E2MbKyKSlg5bi4UFpjz/QStoVAMTzAAAQAAAUuLltxmXMgsXoFEypJUAAAjVsPxj6EexsTDVgno/7l1PydtK6a2keJ7Ju7W5PjZMtdN2vbQ2mP2XOOZpZ4u3u+8rc1x8jXurq3Z5no/wD55GieT5+dPS9y2NF3Sel/0uWOLW/iZFUV8yTvdvfzXh3llSd9ePHv7ySrSwWgAkoAAAXQje/1x4mSVHXKr379F4rUxwla+l7q3xRf2trWW55tXfdwXcQXSWC3snut8iipt30Ls63Wdr3WuvyJ+F2fOrrKOVXbu9N/da7DeCVT1bI3NPcvBfIk0sPfVmSlTUUle7St9IzmTn4Poal28Yj+yiVioBQ4wGAwQW3K3LcxTMuZBYvuC2/19IAYLsi5FMi5GuhVxFtY69yj/UXKpX+78I/1DI0mxBgwcptPtFZ5nbw0tufiZySAAAQCmUqAC3IuRgxOBp1Pfgn37n6rUkgBrPJosR0cj9ibXdLX4o19bYVZbkpeDX52PWgsptGMreDPET2fVW+nP+Vv5GJ0JLfGXoz3gLdQydovJ4JUZfdl6MywwNV7qc/5We4A6g+0Xk8jS2HWf2VHxa/K5PodHOM6nlFfm/0N+CHNmkbeCImF2bSp+7BX5vV/HcSci5FwKG6SXBRRXIqAAAAAAAAUyrkUyLkXAEgAAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//9k=" alt="">
              </div>
              <div class="ml-4">
                <div class="text-sm font-medium text-gray-900">
                  {{$item->nama_agt}}
                </div>
                
                </div>
              </div>
            </div>
            </td>
            <td>
            <div class="text-sm text-gray-500">{{$item->nim}}</div>

            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">{{$item->alamat_agt}}</div>
              
            </td>
            
            <td  class="px-6 py-4 whitespace-nowrap text-right text -sm font-medium">
              <form action="{{route('anggota.destroy', $item->id_agt)}}" method="POST">
                @csrf @method('DELETE')
                <a href="{{route('anggota.edit', $item->id_agt)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                <button class="text-red-600 hover:text-red-900" onclick="return confirm('Anda Yakin')" type="submit">Del</button>
              </form>
            </td>
          </tr>
        @endforeach
        </tbody>
        </table>
        
         </div> 
        </div>

  
                </x-admin-layout>