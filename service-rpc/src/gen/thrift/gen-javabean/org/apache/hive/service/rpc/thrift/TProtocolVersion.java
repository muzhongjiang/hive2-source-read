/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
package org.apache.hive.service.rpc.thrift;


@javax.annotation.Generated(value = "Autogenerated by Thrift Compiler (0.13.0)")
public enum TProtocolVersion implements org.apache.thrift.TEnum {
  HIVE_CLI_SERVICE_PROTOCOL_V1(0),
  HIVE_CLI_SERVICE_PROTOCOL_V2(1),
  HIVE_CLI_SERVICE_PROTOCOL_V3(2),
  HIVE_CLI_SERVICE_PROTOCOL_V4(3),
  HIVE_CLI_SERVICE_PROTOCOL_V5(4),
  HIVE_CLI_SERVICE_PROTOCOL_V6(5),
  HIVE_CLI_SERVICE_PROTOCOL_V7(6),
  HIVE_CLI_SERVICE_PROTOCOL_V8(7),
  HIVE_CLI_SERVICE_PROTOCOL_V9(8),
  HIVE_CLI_SERVICE_PROTOCOL_V10(9),
  HIVE_CLI_SERVICE_PROTOCOL_V11(10);

  private final int value;

  private TProtocolVersion(int value) {
    this.value = value;
  }

  /**
   * Get the integer value of this enum value, as defined in the Thrift IDL.
   */
  public int getValue() {
    return value;
  }

  /**
   * Find a the enum type by its integer value, as defined in the Thrift IDL.
   * @return null if the value is not found.
   */
  @org.apache.thrift.annotation.Nullable
  public static TProtocolVersion findByValue(int value) { 
    switch (value) {
      case 0:
        return HIVE_CLI_SERVICE_PROTOCOL_V1;
      case 1:
        return HIVE_CLI_SERVICE_PROTOCOL_V2;
      case 2:
        return HIVE_CLI_SERVICE_PROTOCOL_V3;
      case 3:
        return HIVE_CLI_SERVICE_PROTOCOL_V4;
      case 4:
        return HIVE_CLI_SERVICE_PROTOCOL_V5;
      case 5:
        return HIVE_CLI_SERVICE_PROTOCOL_V6;
      case 6:
        return HIVE_CLI_SERVICE_PROTOCOL_V7;
      case 7:
        return HIVE_CLI_SERVICE_PROTOCOL_V8;
      case 8:
        return HIVE_CLI_SERVICE_PROTOCOL_V9;
      case 9:
        return HIVE_CLI_SERVICE_PROTOCOL_V10;
      case 10:
        return HIVE_CLI_SERVICE_PROTOCOL_V11;
      default:
        return null;
    }
  }
}
