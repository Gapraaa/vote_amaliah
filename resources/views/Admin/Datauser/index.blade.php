@include('layout.header')

@include('layout.sidebar')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <!-- Button to trigger Create User Modal -->
            <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#createUserModal">Tambah User</button>

            <div class="container">
                <div class="row">
                    @foreach ($schools as $school)
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3 class="card-title">Daftar User - {{ $school->name }}</h3>
                                </div>
                                <div class="card-body">
                                    <table id="usersTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>NISN/NIP</th>
                                                <th>NIS</th>
                                                <th>Kelas</th>
                                                <th>Role</th>
                                                <th>Status Vote</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($usersBySchool[$school->id] as $user)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->username }}</td>
                                                    <td>{{ $user->nisn ?? $user->nip }}</td>
                                                    <td>{{ $user->nis ?? '-' }}</td>
                                                    <td>{{ $user->kelas ? $user->kelas->nama_kelas : '-' }}</td>
                                                    <td>{{ $user->role->name }}</td>
                                                    <td>
                                                        {{ $user->has_voted ? 'Sudah Vote' : 'Belum Vote' }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>



        </div>
    </section>
</div>

<!-- Create User Modal -->
<div class="modal fade" id="createUserModal" tabindex="-1" role="dialog" aria-labelledby="createUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createUserModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('datauser.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <!-- User Type Selector -->
                    <div class="form-group">
                        <label for="user_type_create">Tipe User</label>
                        <select id="user_type_create" class="form-control" onchange="toggleCreateForm()">
                            <option value="siswa">Siswa</option>
                            <option value="guru">Guru/Pegawai</option>
                        </select>
                    </div>

                    <!-- Form for Siswa -->
                    <div id="form-siswa-create">
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="text" name="nisn" id="nisn" class="form-control" oninput="autoFillUsername()" required>
                        </div>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input type="text" name="nis" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="kelas_id">Kelas</label>
                            <select name="kelas_id" class="form-control">
                                <option value="">Pilih Kelas</option>
                                @foreach ($kelas as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="role_id">Role</label>
                            <select name="role_id" class="form-control">
                                @foreach ($roles as $role)
                                    @if ($role->name == 'Siswa')
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Form for Guru/Pegawai -->
                    <div id="form-guru-create" style="display:none;">
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" name="nip" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="role_id">Role</label>
                            <select name="role_id" class="form-control">
                                @foreach ($roles as $role)
                                    @if ($role->name == 'Guru' || $role->name == 'Pegawai')
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah User</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')

<script>
    function autoFillUsername() {
        var nisn = document.getElementById('nisn').value;
        document.getElementById('username').value = nisn; // Set Username to NISN value
    }

    function toggleCreateForm() {
        var userType = document.getElementById('user_type_create').value;
        if (userType === 'siswa') {
            document.getElementById('form-siswa-create').style.display = 'block';
            document.getElementById('form-guru-create').style.display = 'none';
        } else {
            document.getElementById('form-siswa-create').style.display = 'none';
            document.getElementById('form-guru-create').style.display = 'block';
        }
    }
</script>
