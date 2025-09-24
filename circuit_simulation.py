#!/usr/bin/env python3
"""
Full Adder Circuit Simulation
This script simulates the full adder circuit logic to verify correct operation.
"""

def xor_gate(a, b):
    """XOR logic gate simulation"""
    return (a or b) and not (a and b)

def and_gate(a, b):
    """AND logic gate simulation"""
    return a and b

def or_gate(a, b):
    """OR logic gate simulation"""
    return a or b

def full_adder(A, B, Ci):
    """
    Full Adder Circuit Simulation
    
    Args:
        A: First input bit
        B: Second input bit
        Ci: Carry input bit
    
    Returns:
        tuple: (Sum, Carry) - OF and CF outputs
    """
    # Sum calculation: A ⊕ B ⊕ Ci
    ab_xor = xor_gate(A, B)  # XOR1 output
    sum_output = xor_gate(ab_xor, Ci)  # XOR2 output (OF)
    
    # Carry calculation: (A ∧ B) ∨ (Ci ∧ (A ⊕ B))
    ab_and = and_gate(A, B)  # AND1 output
    ci_ab_and = and_gate(Ci, ab_xor)  # AND2 output
    carry_output = or_gate(ab_and, ci_ab_and)  # OR1 output (CF)
    
    return sum_output, carry_output

def run_truth_table_test():
    """Test the full adder with all possible input combinations"""
    print("Full Adder Circuit Truth Table Verification")
    print("=" * 50)
    print("| A | B | Ci | Sum (OF) | Carry (CF) | Status |")
    print("|---|---|----| ---------|------------|--------|")
    
    # Expected results for verification
    expected_results = [
        (0, 0, 0, 0, 0),  # 000 -> Sum=0, Carry=0
        (0, 0, 1, 1, 0),  # 001 -> Sum=1, Carry=0
        (0, 1, 0, 1, 0),  # 010 -> Sum=1, Carry=0
        (0, 1, 1, 0, 1),  # 011 -> Sum=0, Carry=1
        (1, 0, 0, 1, 0),  # 100 -> Sum=1, Carry=0
        (1, 0, 1, 0, 1),  # 101 -> Sum=0, Carry=1
        (1, 1, 0, 0, 1),  # 110 -> Sum=0, Carry=1
        (1, 1, 1, 1, 1),  # 111 -> Sum=1, Carry=1
    ]
    
    all_tests_passed = True
    
    for A, B, Ci, expected_sum, expected_carry in expected_results:
        actual_sum, actual_carry = full_adder(A, B, Ci)
        
        # Convert boolean to int for display
        sum_val = int(actual_sum)
        carry_val = int(actual_carry)
        
        # Check if results match expected values
        test_passed = (sum_val == expected_sum) and (carry_val == expected_carry)
        status = "PASS" if test_passed else "FAIL"
        
        if not test_passed:
            all_tests_passed = False
        
        print(f"| {A} | {B} | {Ci}  |    {sum_val}     |     {carry_val}      | {status}   |")
    
    print("=" * 50)
    
    if all_tests_passed:
        print("✅ All tests PASSED! Circuit logic is correct.")
    else:
        print("❌ Some tests FAILED! Check circuit implementation.")
    
    return all_tests_passed

def demonstrate_circuit_operation():
    """Demonstrate the circuit operation with step-by-step analysis"""
    print("\n" + "=" * 60)
    print("Circuit Operation Demonstration")
    print("=" * 60)
    
    # Example calculation with A=1, B=1, Ci=0
    A, B, Ci = 1, 1, 0
    print(f"\nExample: A={A}, B={B}, Ci={Ci}")
    print("-" * 30)
    
    # Step by step calculation
    ab_xor = xor_gate(A, B)
    print(f"Step 1: XOR1 = A ⊕ B = {A} ⊕ {B} = {int(ab_xor)}")
    
    sum_output = xor_gate(ab_xor, Ci)
    print(f"Step 2: XOR2 = (A ⊕ B) ⊕ Ci = {int(ab_xor)} ⊕ {Ci} = {int(sum_output)} (OF)")
    
    ab_and = and_gate(A, B)
    print(f"Step 3: AND1 = A ∧ B = {A} ∧ {B} = {int(ab_and)}")
    
    ci_ab_and = and_gate(Ci, ab_xor)
    print(f"Step 4: AND2 = Ci ∧ (A ⊕ B) = {Ci} ∧ {int(ab_xor)} = {int(ci_ab_and)}")
    
    carry_output = or_gate(ab_and, ci_ab_and)
    print(f"Step 5: OR1 = (A ∧ B) ∨ (Ci ∧ (A ⊕ B)) = {int(ab_and)} ∨ {int(ci_ab_and)} = {int(carry_output)} (CF)")
    
    print(f"\nFinal Result: OF = {int(sum_output)}, CF = {int(carry_output)}")

def main():
    """Main function to run the simulation"""
    print("Full Adder Circuit Simulation")
    print("Simulating the Proteus circuit implementation")
    print("=" * 60)
    
    # Run truth table verification
    success = run_truth_table_test()
    
    # Demonstrate circuit operation
    demonstrate_circuit_operation()
    
    # Additional test cases
    print("\n" + "=" * 60)
    print("Additional Test Cases")
    print("=" * 60)
    
    test_cases = [
        (1, 0, 1),  # Should output Sum=0, Carry=1
        (0, 1, 1),  # Should output Sum=0, Carry=1
        (1, 1, 1),  # Should output Sum=1, Carry=1
    ]
    
    for A, B, Ci in test_cases:
        sum_out, carry_out = full_adder(A, B, Ci)
        print(f"Input: A={A}, B={B}, Ci={Ci} -> Output: OF={int(sum_out)}, CF={int(carry_out)}")
    
    print("\n" + "=" * 60)
    if success:
        print("✅ Simulation completed successfully!")
        print("The circuit implementation is verified and ready for Proteus.")
    else:
        print("❌ Simulation found errors in the logic.")
    print("=" * 60)

if __name__ == "__main__":
    main()