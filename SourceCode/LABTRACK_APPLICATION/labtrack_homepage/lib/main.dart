import 'package:flutter/material.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'My App',
      theme: ThemeData(
        primarySwatch: Colors.red,
      ),
      home: const MyHomePage(),
      routes: {
        LoginForm.routeName: (context) => const LoginForm(),
        BorrowerLoginForm.routeName: (context) => BorrowerLoginForm(),
      },

    );
  }
}

class MyHomePage extends StatelessWidget {
  const MyHomePage({Key? key}) : super(key: key);

  void _navigateToLoginForm(BuildContext context) {
    Navigator.pushNamed(context, LoginForm.routeName);
  }

  void _navigateToBorrowerLoginForm(BuildContext context) {
    Navigator.pushNamed(context, BorrowerLoginForm.routeName);
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: <Widget>[
            Image.asset(
              'assets/bsu-logo.png',
              width: 230,
              height: 230,
            ),
            SizedBox(height: 16),
            Text(
              'LABTRACK',
              style: TextStyle(
                fontSize: 30,
                fontWeight: FontWeight.bold,
                letterSpacing: 5,
              ),
            ),
            SizedBox(height: 16),
            Row(
              mainAxisAlignment: MainAxisAlignment.center,
              children: <Widget>[
                ElevatedButton.icon(
                  onPressed: () => _navigateToLoginForm(context),
                  icon: Icon(Icons.admin_panel_settings),
                  label: Text('Admin'),
                ),
                SizedBox(width: 8),
                ElevatedButton.icon(
                  onPressed: () => _navigateToBorrowerLoginForm(context),
                  icon: Icon(Icons.person),
                  label: Text('Borrower'),
                ),
              ],
            ),
          ],
        ),
      ),
    );
  }
}



// ADMIN
class LoginForm extends StatefulWidget {
  static const routeName = '/login';

  const LoginForm({Key? key}) : super(key: key);

  @override
  _LoginFormState createState() => _LoginFormState();
}

class _LoginFormState extends State<LoginForm> {
  bool _isPasswordVisible = false;

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(
          'LABTRACK',
          style: TextStyle(
            fontSize: 20,
            fontWeight: FontWeight.bold,
            letterSpacing: 5,
          ),
        ),
        centerTitle: true,
      ),
      body: Center(
        child: Container(
          width: 300,
          padding: EdgeInsets.all(16),
          child: Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: <Widget>[
              Text(
                'ADMIN',
                style: TextStyle(
                  fontSize: 24,
                  fontWeight: FontWeight.bold,
                ),
              ),
              SizedBox(height: 30),
              TextField(
                decoration: InputDecoration(
                  prefixIcon: Icon(Icons.person),
                  labelText: 'Username',
                ),
              ),
              SizedBox(height: 16),
              TextField(
                decoration: InputDecoration(
                  prefixIcon: Icon(Icons.lock),
                  labelText: 'Password',
                  suffixIcon: IconButton(
                    icon: Icon(
                      _isPasswordVisible ? Icons.visibility : Icons.visibility_off,
                    ),
                    onPressed: () {
                      setState(() {
                        _isPasswordVisible = !_isPasswordVisible;
                      });
                    },
                  ),
                ),
                obscureText: !_isPasswordVisible,
              ),
              SizedBox(height: 16),
              ElevatedButton(
                onPressed: () {
                  // Perform login action
                },
                child: Text('Login'),
              ),
              SizedBox(height: 8),

            ],
          ),
        ),
      ),
    );
  }
}
// BORROWER
class BorrowerLoginForm extends StatefulWidget {
  static const routeName = '/borrower-login';

  const BorrowerLoginForm({Key? key}) : super(key: key);

  @override
  _BorrowerLoginFormState createState() => _BorrowerLoginFormState();
}

class _BorrowerLoginFormState extends State<BorrowerLoginForm> {
  bool _isPasswordVisible = false;

  void navigateToSignUp() {
    Navigator.push(
      context,
      MaterialPageRoute(builder: (context) => SignUpPage()),
    );
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(
          'LABTRACK',
          style: TextStyle(
            fontSize: 20,
            fontWeight: FontWeight.bold,
            letterSpacing: 5,
          ),
        ),
        centerTitle: true,
      ),
      body: Center(
        child: Container(
          width: 300,
          padding: EdgeInsets.all(16),
          child: Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: <Widget>[
              Text(
                'BORROWER',
                style: TextStyle(
                  fontSize: 24,
                  fontWeight: FontWeight.bold,
                ),
              ),
              SizedBox(height: 30),
              TextField(
                decoration: InputDecoration(
                  prefixIcon: Icon(Icons.person),
                  labelText: 'SR-Code',
                ),
              ),
              SizedBox(height: 16),
              TextField(
                decoration: InputDecoration(
                  prefixIcon: Icon(Icons.lock),
                  labelText: 'Password',
                  suffixIcon: IconButton(
                    icon: Icon(
                      _isPasswordVisible ? Icons.visibility : Icons.visibility_off,
                    ),
                    onPressed: () {
                      setState(() {
                        _isPasswordVisible = !_isPasswordVisible;
                      });
                    },
                  ),
                ),
                obscureText: !_isPasswordVisible,
              ),
              SizedBox(height: 16),
              ElevatedButton(
                onPressed: () {
                  // Perform login action
                },
                child: Text('Login'),
              ),
              SizedBox(height: 8),
              TextButton(
                onPressed: navigateToSignUp, // Navigates to signup page
                child: Text(
                  "Haven't an account? Create one",
                  style: TextStyle(fontSize: 12),
                ),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
//signup
class SignUpPage extends StatefulWidget {
  @override
  _SignUpPageState createState() => _SignUpPageState();
}

class _SignUpPageState extends State<SignUpPage> {
  String? selectedRole;
  String? selectedGender;
  String? selectedDepartment;
  String? selectedYear;
  TextEditingController sectionController = TextEditingController();
  TextEditingController idController = TextEditingController();
  TextEditingController passwordController = TextEditingController();
  bool obscurePassword = true;

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(
          'LABTRACK',
          style: TextStyle(
            fontSize: 20,
            fontWeight: FontWeight.bold,
            letterSpacing: 5,
          ),
        ),
        centerTitle: true,
      ),
      body: Padding(
        padding: EdgeInsets.all(3),
        child: Align(
          alignment: Alignment.topCenter,
          child: SingleChildScrollView(
            child: Column(
              children: [
                Row(
                  mainAxisAlignment: MainAxisAlignment.center,
                  children: [
                    Text(
                      'Create Account as:',
                      style: TextStyle(
                        fontSize: 18,
                        fontWeight: FontWeight.bold,
                      ),
                    ),
                    SizedBox(width: 10),
                    Container(
                      padding: EdgeInsets.symmetric(horizontal: 3, vertical: 1),
                      decoration: BoxDecoration(
                        border: Border.all(color: Colors.grey),
                        borderRadius: BorderRadius.circular(7),
                      ),
                      child: DropdownButton<String>(
                        value: selectedRole,
                        hint: Text('Select Role'),
                        onChanged: (String? newValue) {
                          setState(() {
                            selectedRole = newValue;
                          });
                        },
                        items: <String>['Student', 'Faculty']
                            .map<DropdownMenuItem<String>>((String value) {
                          IconData icon;
                          if (value == 'Student') {
                            icon = Icons.school;
                          } else {
                            icon = Icons.work;
                          }
                          return DropdownMenuItem<String>(
                            value: value,
                            child: Row(
                              children: [
                                Icon(icon),
                                SizedBox(width: 5),
                                Text(
                                  value,
                                  style: TextStyle(
                                    color: Colors.black,
                                  ),
                                ),
                              ],
                            ),
                          );
                        }).toList(),
                      ),
                    ),
                  ],
                ),
                SizedBox(height: 5),
                Divider(
                  color: Colors.grey,
                  endIndent: 20.0,
                  indent: 20.0,
                  thickness: 2,
                ),
                SizedBox(height: 10),
                if (selectedRole == 'Student')
                  Text(
                    'Sign up as Student',
                    style: TextStyle(
                      fontSize: 16,
                      fontWeight: FontWeight.bold,
                    ),
                  ),
                if (selectedRole == 'Faculty')
                  Text(
                    'Sign up as Faculty',
                    style: TextStyle(
                      fontSize: 16,
                      fontWeight: FontWeight.bold,
                    ),
                  ),
                SizedBox(height: 15),
                Container(
                  padding: EdgeInsets.symmetric(horizontal: 18),
                  child: TextField(
                    decoration: InputDecoration(
                      labelText: 'First Name',
                      border: OutlineInputBorder(
                        borderRadius: BorderRadius.circular(7),
                      ),
                      prefixIcon: Icon(Icons.person),
                      contentPadding: EdgeInsets.symmetric(vertical: 10),
                    ),
                  ),
                ),
                SizedBox(height: 15),
                Container(
                  padding: EdgeInsets.symmetric(horizontal: 18),
                  child: TextField(
                    decoration: InputDecoration(
                      labelText: 'Last Name',
                      border: OutlineInputBorder(
                        borderRadius: BorderRadius.circular(7),
                      ),
                      prefixIcon: Icon(Icons.person),
                      contentPadding: EdgeInsets.symmetric(vertical: 10),
                    ),
                  ),
                ),
                SizedBox(height: 15),
                Row(
                  mainAxisAlignment: MainAxisAlignment.spaceBetween,
                  children: [
                    Expanded(
                      flex: 1,
                      child: Container(
                        padding: EdgeInsets.symmetric(vertical: 4, horizontal: 18),
                        child: TextField(
                          decoration: InputDecoration(
                            labelText: 'Contact Number',
                            border: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(7),
                            ),
                            prefixIcon: Icon(Icons.phone),
                            contentPadding: EdgeInsets.symmetric(vertical: 10),
                          ),
                          keyboardType: TextInputType.number,
                        ),
                      ),
                    ),
                    SizedBox(width: 10),
                    Expanded(
                      child: Align(
                        alignment: Alignment.centerLeft,
                        child: Padding(
                          padding: EdgeInsets.only(left: 7),
                          child: Container(
                            width: MediaQuery.of(context).size.width / 2.4,  // Adjusted width
                            padding: EdgeInsets.symmetric(horizontal: 8),
                            decoration: BoxDecoration(
                              border: Border.all(color: Colors.grey),
                              borderRadius: BorderRadius.circular(7),
                            ),
                            child: DropdownButton<String>(
                              isExpanded: true,
                              value: selectedGender,
                              hint: Text('Select Gender'),
                              onChanged: (String? newValue) {
                                setState(() {
                                  selectedGender = newValue;
                                });
                              },
                              items: <String>['Male', 'Female', 'Other']
                                  .map<DropdownMenuItem<String>>((String value) {
                                return DropdownMenuItem<String>(
                                  value: value,
                                  child: Text(value),
                                );
                              }).toList(),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ],
                ),
                SizedBox(height: 15),
                if (selectedRole == 'Student')
                  Container(
                    padding: EdgeInsets.symmetric(horizontal: 18),
                    child: DropdownButtonFormField<String>(
                      decoration: InputDecoration(

                        border: OutlineInputBorder(
                          borderRadius: BorderRadius.circular(7),
                        ),
                        prefixIcon: Icon(Icons.school),
                        contentPadding: EdgeInsets.symmetric(vertical: 10),
                      ),
                      value: selectedDepartment,
                      hint: Text('Select Department'),
                      onChanged: (String? newValue) {
                        setState(() {
                          selectedDepartment = newValue;
                        });
                      },
                      items: <String>['BSIT', 'BSCD']
                          .map<DropdownMenuItem<String>>((String value) {
                        return DropdownMenuItem<String>(
                          value: value,
                          child: Text(value),
                        );
                      }).toList(),
                    ),
                  ),
                if (selectedRole == 'Student')
                  SizedBox(height: 15),
                if (selectedRole == 'Student')
                  Row(
                    mainAxisAlignment: MainAxisAlignment.spaceBetween,
                    children: [
                      Expanded(
                        flex: 1,
                        child: Container(
                          padding: EdgeInsets.symmetric(horizontal: 18),
                          child: DropdownButtonFormField<String>(
                            decoration: InputDecoration(
                              border: OutlineInputBorder(
                                borderRadius: BorderRadius.circular(7),
                              ),
                              prefixIcon: Icon(Icons.calendar_today),
                              contentPadding: EdgeInsets.symmetric(vertical: 10),
                            ),
                            value: selectedYear,
                            hint: Text('Select Year'),
                            onChanged: (String? newValue) {
                              setState(() {
                                selectedYear = newValue;
                              });
                            },
                            items: <String>['1st year', '2nd year', '3rd year', '4th year']
                                .map<DropdownMenuItem<String>>((String value) {
                              return DropdownMenuItem<String>(
                                value: value,
                                child: Text(value),
                              );
                            }).toList(),
                          ),
                        ),
                      ),
                      SizedBox(width: 10),
                      Expanded(
                        flex: 1,
                        child: Container(
                          padding: EdgeInsets.symmetric(horizontal: 17),
                          child: TextField(
                            decoration: InputDecoration(
                              labelText: 'Section',
                              border: OutlineInputBorder(
                                borderRadius: BorderRadius.circular(7),
                              ),
                              prefixIcon: Icon(Icons.list),
                              contentPadding: EdgeInsets.symmetric(vertical: 10),
                            ),
                            controller: sectionController,
                          ),
                        ),
                      ),
                    ],
                  ),
                if (selectedRole == 'Faculty')
                  Container(
                    padding: EdgeInsets.symmetric(horizontal: 18),
                    child: DropdownButtonFormField<String>(
                      decoration: InputDecoration(
                        border: OutlineInputBorder(
                          borderRadius: BorderRadius.circular(7),
                        ),
                        prefixIcon: Icon(Icons.school),
                        contentPadding: EdgeInsets.symmetric(vertical: 10),
                      ),
                      value: selectedDepartment,
                      hint: Text('Select Department'),
                      onChanged: (String? newValue) {
                        setState(() {
                          selectedDepartment = newValue;
                        });
                      },
                      items: <String>['BSIT', 'BSCS']
                          .map<DropdownMenuItem<String>>((String value) {
                        return DropdownMenuItem<String>(
                          value: value,
                          child: Text(value),
                        );
                      }).toList(),
                    ),
                  ),
                SizedBox(height: 15),
                Container(
                  padding: EdgeInsets.symmetric(horizontal: 18),
                  child: TextField(
                    decoration: InputDecoration(
                      labelText: 'ID Number',
                      border: OutlineInputBorder(
                        borderRadius: BorderRadius.circular(7),
                      ),
                      prefixIcon: Icon(Icons.perm_identity),
                      contentPadding: EdgeInsets.symmetric(vertical: 10),
                    ),
                    keyboardType: TextInputType.number,
                  ),
                ),
                SizedBox(height: 15),
                Container(
                  padding: EdgeInsets.symmetric(horizontal: 18),
                  child: TextField(
                    decoration: InputDecoration(
                      labelText: 'Password',
                      border: OutlineInputBorder(
                        borderRadius: BorderRadius.circular(7),
                      ),
                      prefixIcon: Icon(Icons.lock),
                      suffixIcon: IconButton(
                        icon: Icon(obscurePassword ? Icons.visibility : Icons.visibility_off),
                        onPressed: () {
                          setState(() {
                            obscurePassword = !obscurePassword;
                          });
                        },
                      ),
                      contentPadding: EdgeInsets.symmetric(vertical: 10),
                    ),
                    obscureText: obscurePassword,
                  ),
                ),
                SizedBox(height: 15),
                Container(
                  padding: EdgeInsets.symmetric(horizontal: 18),
                  child: ElevatedButton(
                    onPressed: () {
                      // Sign up logic here
                    },
                    child: Text('Sign Up'),
                  ),
                ),
              ],
            ),
          ),
        ),
      ),
    );
  }
}
