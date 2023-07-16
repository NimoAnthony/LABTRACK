import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:labtrack_homepage/faculty-signUP.dart';
import 'package:labtrack_homepage/student-signUp.dart';

class BorrowerLoginForm extends StatefulWidget {
  static const routeName = '/borrower-login';

  const BorrowerLoginForm({Key? key}) : super(key: key);

  @override
  _BorrowerLoginFormState createState() => _BorrowerLoginFormState();
}

class _BorrowerLoginFormState extends State<BorrowerLoginForm> {
  bool _isPasswordVisible = false;
  bool _rememberMe = false;
  bool _showCreateAccountModal = false;

  void _showModal() {
    setState(() {
      _showCreateAccountModal = true;
    });
  }

  void _hideModal() {
    setState(() {
      _showCreateAccountModal = false;
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      resizeToAvoidBottomInset: true,

      body: Stack(
        children: [
          Center(
            child: Container(
              width: 300,
              padding: EdgeInsets.all(16),
              child: Column(
                mainAxisAlignment: MainAxisAlignment.center,
                children: <Widget>[
                  Row(
                    children: [
                      Image.asset(
                        'assets/bsu-logo.png', // Replace with your image location
                        height: 40,
                        width: 50,
                      ),
                      SizedBox(width: 10),
                      Text(
                        'BORROWER',
                        style: TextStyle(
                          fontSize: 24,
                          fontWeight: FontWeight.bold,
                        ),
                      ),
                    ],
                  ),
                  SizedBox(height: 30),
                  TextField(
                    decoration: InputDecoration(
                      prefixIcon: Icon(Icons.person),
                      labelText: 'SR-Code',
                    ),
                    keyboardType: TextInputType.number,
                    inputFormatters: [FilteringTextInputFormatter.digitsOnly],
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
                  Row(
                    children: [
                      Checkbox(
                        value: _rememberMe,
                        onChanged: (value) {
                          setState(() {
                            _rememberMe = value!;
                          });
                        },
                      ),
                      Text('Remember Me'),
                      Spacer(),
                      TextButton(
                        onPressed: () {
                          // Handle Forgot Password action
                        },
                        child: Text(
                          'Forgot Password',
                          style: TextStyle(fontSize: 12),
                        ),
                      ),
                    ],
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
                    onPressed: _showModal,
                    child: Text(
                      "Haven't an account? Create One",
                      style: TextStyle(fontSize: 12),
                    ),
                  ),
                ],
              ),
            ),
          ),
          if (_showCreateAccountModal)
            GestureDetector(
              onTap: _hideModal,
              child: Container(
                color: Colors.black.withOpacity(0.8),
              ),
            ),
          if (_showCreateAccountModal)
            Center(
              child: Container(
                width: 300,
                height: 200,
                padding: EdgeInsets.all(16),
                decoration: BoxDecoration(
                  borderRadius: BorderRadius.circular(20),
                  color: Colors.white,
                ),
                child: Column(
                  crossAxisAlignment: CrossAxisAlignment.end,
                  children: [
                    IconButton(
                      onPressed: _hideModal,
                      icon: Icon(Icons.close_rounded, color: Colors.red),
                    ),
                    SizedBox(height: 0),
                    Align(
                      alignment: Alignment.center,
                      child: Text(
                        'Sign-Up as:',
                        style: TextStyle(fontSize: 25,
                            fontWeight: FontWeight.normal
                        ),

                      ),
                    ),
                    SizedBox(height: 15),
                    Row(
                      mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                      children: [
                        ElevatedButton.icon(
                          onPressed: () {
                            Navigator.push(
                              context,
                              MaterialPageRoute(
                                builder: (context) => FacultySignUpForm(),
                              ),
                            );
                          },
                          icon: Icon(Icons.school),
                          label: Text('Faculty'),
                        ),
                        ElevatedButton.icon(
                          onPressed: (){
                            Navigator.push(
                              context,
                              MaterialPageRoute(
                                builder: (context) => StudentSignUpForm(),
                              ),
                            );
                          },
                          icon: Icon(Icons.person),
                          label: Text('Student'),
                        ),
                      ],
                    ),
                    SizedBox(height: 16),

                  ],
                ),
              ),
            ),
        ],
      ),
    );
  }
}