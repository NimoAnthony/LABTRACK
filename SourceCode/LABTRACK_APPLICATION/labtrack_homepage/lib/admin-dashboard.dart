import 'package:flutter/material.dart';
import 'package:labtrack_homepage/item_table.dart';
import 'package:labtrack_homepage/main.dart';
import 'package:labtrack_homepage/side_borrower.dart';
import 'package:labtrack_homepage/rooms.dart';

class AdminDashboard extends StatefulWidget {
  static const routeName = '/admin-dashboard';

  @override
  State<AdminDashboard> createState() => _AdminDashboardState();
}

class _AdminDashboardState extends State<AdminDashboard> {
  void _navigateToItemTableState(BuildContext context) {
    Navigator.push(
      context,
      MaterialPageRoute(builder: (context) => ItemTable()),
    );
  }
  void _navigateToRooms(BuildContext context) {
    Navigator.push(context,
      MaterialPageRoute(builder: (context) => Rooms()),
    );
  }

  void _navigateLoginFormState(BuildContext context) {
    Navigator.push(
      context,
      MaterialPageRoute(builder: (context) => LoginForm()),
    );
  }
  void _navigateToSideBorrower(BuildContext context) {
    Navigator.push(context,
        MaterialPageRoute(builder: (context) => SideBorrower()),
    );
  }


  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        actions: [
          IconButton(
            icon: Icon(Icons.update),
            onPressed: () {
              // Handle update action
            },
          ),
          IconButton(
            icon: Icon(Icons.notifications),
            onPressed: () {
              // Handle notification action
            },
          ),
          PopupMenuButton(
            itemBuilder: (BuildContext context) => [
              PopupMenuItem(
                child: ListTile(
                  leading: Icon(Icons.logout),
                  title: Text('Logout'),
                  onTap: () => _navigateLoginFormState(context),
                  // Handle logout action
                ),
              ),
              PopupMenuItem(
                child: ListTile(
                  leading: Icon(Icons.person),
                  title: Text('Profile'),
                  onTap: () {
                    // Handle profile action
                  },
                ),
              ),
            ],
            icon: Icon(Icons.person), // Set the user icon here
          ),
        ],
      ),
      drawer: Drawer(
        child: ListView(
          children: [
            DrawerHeader(
              decoration: BoxDecoration(
                color: Colors.grey,
              ),
              child: Column(
                children: [
                  Image.asset(
                    'assets/bsu-logo.png', // Replace with your image location
                    height: 130,
                    width: 130,
                  ),
                ],
              ),
            ),
            ListTile(
              title: Text('Dashboard'),
              leading: Icon(Icons.dashboard),
              onTap: () {
                // Handle dashboard navigation
              },
            ),
            ListTile(
              title: Text('Laboratory Resources'),
              leading: Icon(Icons.science),
              onTap: () => _navigateToItemTableState(context),
            ),
            ExpansionTile(
              title: Text('Transactions'),
              leading: Icon(Icons.newspaper),
              children: [
                ListTile(
                  title: Text('Request'),
                  leading: Icon(Icons.request_page),
                  onTap: () {
                    // Handle request navigation
                  },
                ),
                ListTile(
                  title: Text('Make New Requests'),
                  leading: Icon(Icons.add_box),
                  onTap: () {
                    // Handle make new requests navigation
                  },
                ),
                ListTile(
                  title: Text('Borrowed Tools'),
                  leading: Icon(Icons.science),
                  onTap: () {
                    // Handle borrowed items navigation
                  },
                ),
                ListTile(
                  title: Text('Return Items'),
                  leading: Icon(Icons.assignment_return),
                  onTap: () {
                    // Handle return items navigation
                  },
                ),
              ],
            ),
            ListTile(
              title: Text('Borrowers'),
              leading: Icon(Icons.person),
              onTap: () => _navigateToSideBorrower(context),
              // Handle borrowers navigation
            ),
            ListTile(
              title: Text('Rooms'),
              leading: Icon(Icons.room_preferences),
              onTap: () => _navigateToRooms(context),
            ),
            ListTile(
              title: Text('Inventory'),
              leading: Icon(Icons.inventory_2),
              onTap: () {
                // Handle inventory navigation
              },
            ),
            ListTile(
              title: Text('Graphs'),
              leading: Icon(Icons.area_chart_sharp),
              onTap: () {
                // Handle graphs navigation
              },
            ),
            ListTile(
              title: Text('Users'),
              leading: Icon(Icons.supervised_user_circle_sharp),
              onTap: () {
                // Handle users navigation
              },
            ),
            ListTile(
              title: Text('History'),
              leading: Icon(Icons.history),
              onTap: () {
                // Handle history navigation
              },
            ),
          ],
        ),
      ),
      body: Padding(
        padding: EdgeInsets.all(16),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Text(
              'Dashboard',
              style: TextStyle(
                fontSize: 24,
                fontWeight: FontWeight.bold,
              ),
            ),
            SizedBox(height: 16),
            Row(
              children: [
                Expanded(
                  child: Card(
                    color: Colors.white,
                    shape: RoundedRectangleBorder(
                      side: BorderSide(color: Colors.grey, width: 3),
                      borderRadius: BorderRadius.circular(8),
                    ),
                    child: Padding(
                      padding: EdgeInsets.all(5),
                      child: Row(
                        crossAxisAlignment: CrossAxisAlignment.start,
                        children: [
                          Icon(
                            Icons.person,
                            size: 70,
                            color: Colors.red,
                          ),
                          SizedBox(width: 2),
                          Expanded(
                            child: Column(
                              crossAxisAlignment: CrossAxisAlignment.start,
                              children: [
                                Text(
                                  'Total Borrowers',
                                  style: TextStyle(
                                    fontSize: 15,
                                    fontWeight: FontWeight.bold,
                                  ),
                                ),
                                SizedBox(height: 8),
                                Text(
                                  '100',
                                  style: TextStyle(
                                    fontSize: 25,
                                    fontWeight: FontWeight.bold,
                                    color: Colors.red,
                                  ),
                                ),
                              ],
                            ),
                          ),
                        ],
                      ),
                    ),
                  ),
                ),
                SizedBox(width: 5),
                Expanded(
                  child: Card(
                    color: Colors.white,
                    shape: RoundedRectangleBorder(
                      side: BorderSide(color: Colors.grey, width: 3),
                      borderRadius: BorderRadius.circular(8),
                    ),
                    child: Padding(
                      padding: EdgeInsets.all(5),
                      child: Row(
                        crossAxisAlignment: CrossAxisAlignment.start,
                        children: [
                          Icon(
                            Icons.science_sharp,
                            size: 70,
                            color: Colors.red,
                          ),
                          SizedBox(width: 2),
                          Expanded(
                            child: Column(
                              crossAxisAlignment: CrossAxisAlignment.start,
                              children: [
                                Text(
                                  'Total Chemicals',
                                  style: TextStyle(
                                    fontSize: 15,
                                    fontWeight: FontWeight.bold,
                                  ),
                                ),
                                SizedBox(height: 8),
                                Text(
                                  '100',
                                  style: TextStyle(
                                    fontSize: 25,
                                    fontWeight: FontWeight.bold,
                                    color: Colors.red,
                                  ),
                                ),
                              ],
                            ),
                          ),
                        ],
                      ),
                    ),
                  ),
                ),
              ],
            ),
            SizedBox(height: 10),
            Row(
              children: [
                Expanded(
                  child: Card(
                    color: Colors.white,
                    shape: RoundedRectangleBorder(
                      side: BorderSide(color: Colors.grey, width: 3),
                      borderRadius: BorderRadius.circular(8),
                    ),
                    child: Padding(
                      padding: EdgeInsets.all(5),
                      child: Row(
                        crossAxisAlignment: CrossAxisAlignment.start,
                        children: [
                          Icon(
                            Icons.report_problem,
                            size: 70,
                            color: Colors.red,
                          ),
                          SizedBox(width: 2),
                          Expanded(
                            child: Column(
                              crossAxisAlignment: CrossAxisAlignment.start,
                              children: [
                                Text(
                                  'Damaged Tools',
                                  style: TextStyle(
                                    fontSize: 15,
                                    fontWeight: FontWeight.bold,
                                  ),
                                ),
                                SizedBox(height: 8),
                                Text(
                                  '100',
                                  style: TextStyle(
                                    fontSize: 25,
                                    fontWeight: FontWeight.bold,
                                    color: Colors.red,
                                  ),
                                ),
                              ],
                            ),
                          ),
                        ],
                      ),
                    ),
                  ),
                ),
                SizedBox(width: 5),
                Expanded(
                  child: Card(
                    color: Colors.white,
                    shape: RoundedRectangleBorder(
                      side: BorderSide(color: Colors.grey, width: 3),
                      borderRadius: BorderRadius.circular(8),
                    ),
                    child: Padding(
                      padding: EdgeInsets.all(5),
                      child: Row(
                        crossAxisAlignment: CrossAxisAlignment.start,
                        children: [
                          Icon(
                            Icons.request_page_rounded,
                            size: 70,
                            color: Colors.red,
                          ),
                          SizedBox(width: 2),
                          Expanded(
                            child: Column(
                              crossAxisAlignment: CrossAxisAlignment.start,
                              children: [
                                Text(
                                  'Total Borrowers',
                                  style: TextStyle(
                                    fontSize: 15,
                                    fontWeight: FontWeight.bold,
                                  ),
                                ),
                                SizedBox(height: 8),
                                Text(
                                  '100',
                                  style: TextStyle(
                                    fontSize: 25,
                                    fontWeight: FontWeight.bold,
                                    color: Colors.red,
                                  ),
                                ),
                              ],
                            ),
                          ),
                        ],
                      ),
                    ),
                  ),
                ),
              ],
            ),
          ],
        ),
      ),
    );
  }
}
